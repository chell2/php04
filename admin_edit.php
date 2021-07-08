<?php
session_start();
include("functions.php");
check_session_id();

$id = $_GET["id"];

$pdo = connect_to_db();

$sql = 'SELECT * FROM staff_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
	$error = $stmt->errorInfo();
	echo json_encode(["error_msg" => "{$error[2]}"]);
	exit();
} else {
	$record = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>管理者画面（アカウント編集画面）</title>
</head>

<body>
	<form action="admin_update.php" method="POST">
		<fieldset>
			<legend>管理者画面（アカウント編集画面）</legend>
			<a href="admin_read.php">一覧画面</a>
			<div>
				担当者ID: <input type="text" name="staffname" value="<?= $record["staffname"] ?>">
			</div>
			<div>
				パスワード: <input type="text" name="password" value="<?= $record["password"] ?>">
			</div>
			<div>
				管理者権限: <input type="number" name="is_admin" step="1" min="0" max="1" value="<?= $record["is_admin"] ?>">
			</div>
			<div>
				<input type="hidden" name="is_deleted" value="<?= $record["is_deleted"] ?>">
			</div>
			<div>
				<button>更新</button>
			</div>
			<input type="hidden" name="id" value="<?= $record["id"] ?>">
		</fieldset>
	</form>

</body>

</html>