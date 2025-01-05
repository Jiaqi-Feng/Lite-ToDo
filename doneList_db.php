<?php
session_start();
header('Content-Type: application/json');

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "test");
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT task, `id`, `type` FROM todos WHERE `uid` = ? AND is_done = 1");
$stmt -> bind_param("i", $user_id);
$stmt -> execute();
$result = $stmt -> get_result();

$doneItems = [];
while ($row = $result -> fetch_assoc()){
    $doneItems[] = $row;
}

echo json_encode($doneItems);

$stmt -> close();
$conn -> close();