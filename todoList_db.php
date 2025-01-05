<?php
session_start();
header('Content-Type: application/json');

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "test");
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT task, `id`, `type` FROM todos WHERE `uid` = ? AND is_done = 0");
$stmt -> bind_param("i", $user_id);
$stmt -> execute();
$result = $stmt -> get_result();

$todoItems = [];
while ($row = $result -> fetch_assoc()){
    $todoItems[] = $row;
}

echo json_encode($todoItems);

$stmt -> close();
$conn -> close();