<?php
session_start();
include("functions.php");
check_session_id();

$pdo = connect_to_db();

$sql = 'SELECT * FROM staff_table';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
	$error = $stmt->errorInfo();
	echo json_encode(["error_msg" => "{$error[2]}"]);
	exit();
} else {
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$output = "";
	foreach ($result as $record) {
		$output .= "<tr>";
		$output .= "<td>{$record["staffname"]}</td>";
		$output .= "<td>{$record["password"]}</td>";
		$output .= "<td>{$record["is_admin"]}</td>";
		$output .= "<td><a href='admin_edit.php?id={$record["id"]}'><i class='fas fa-edit'></i></a></td>";
		$output .= "<td><a href='admin_delete.php?id={$record["id"]}' onclick='return confirm_del();'><i class='fas fa-trash-alt'></i></a></td>";
		$output .= "</tr>";
	}
	unset($value);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>管理者画面（登録者リスト）</title>
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="staffpage.css">
	<style>
		table {
			width: 100%;
			border-collapse: collapse;
			border-spacing: 0;
			font-size: .9em;
		}

		table th,
		table td {
			padding: 5px 0;
			text-align: center;
		}

		table th {
			background-color: #eee;
		}

		table tr:nth-child(even) {
			background-color: #eee;
		}
	</style>
</head>

<body>
	<script>
		function confirm_del() {
			var select = confirm("本当に削除しますか？ \n「OK」で削除 \n「キャンセル」で中止");
			return select;
		}
	</script>
	<div class="admin_read_main">
		<p class="msg">&emsp;管理者: <?= $_SESSION['staffname'] ?>さん</p>
		<p class="adminpagetitle">登録者リスト</p>
		&emsp;
		<a href="admin_login.php" class="linkstyle">管理者ログイン画面</a> /
		<a href="staff_register.php" class="linkstyle">アカウント登録画面</a> /
		<!-- <a href="shinsei_graph.php" class="linkstyle">データ編集画面</a> /  -->
		<a href="admin_logout.php" class="linkstyle">ログアウト</a>
		<div class="staff_list">
			<fieldset>
				<table>
					<thead>
						<tr>
							<th>担当者ID</th>
							<th>パスワード</th>
							<th>管理者権限</th>
							<th>編集</th>
							<th>削除</th>
						</tr>
					</thead>
					<tbody>
						<!-- ここに<tr><td>担当者Id</td><td>パスワード</td>...<tr>の形でデータが入る -->
						<?= $output ?>
					</tbody>
				</table>
			</fieldset>
		</div>
	</div>
</body>

</html>