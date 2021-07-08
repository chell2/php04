<?php
// ini_set('display_errors', 1);
// ini_set('error_reporting', E_ALL);

include('functions.php');
$staffname = $_POST['staffname'];
$password = $_POST['password'];
$is_admin = $_POST['is_admin'];
$is_deleted = $_POST['is_deleted'];
$id = $_POST['id'];
// DB接続
$pdo = connect_to_db();

$sql = "UPDATE staff_table SET staffname=:staffname, password=:password, is_admin=:is_admin, is_deleted=:is_deleted, updated_at=sysdate() WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':staffname', $staffname, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':is_admin', $is_admin, PDO::PARAM_STR);
$stmt->bindValue(':is_deleted', $is_deleted, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
	$error = $stmt->errorInfo();
	echo json_encode(["error_msg" => "{$error[2]}"]);
	exit();
} else {
	header("Location:admin_read.php");
	exit();
}

// var_dump($_POST);
// exit();