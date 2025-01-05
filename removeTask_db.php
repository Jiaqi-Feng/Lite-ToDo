<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "test");
$data = json_decode(file_get_contents("php://input"), true);
$userId = $_SESSION['user_id'];
$taskId = $data['removeTaskId'];

$stmt = $conn -> prepare("DELETE FROM `todos` WHERE `id` = ? AND `uid` = ?");
if($stmt === false){
    die("Prepare failed:" . $conn -> error);
}
$stmt -> bind_param("ii",$taskId,$userId);

if($stmt -> execute()){
    http_response_code(200);
    echo json_encode(["message" => "Task deleted successfully."]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Failed to delete task."]);
}

$stmt -> close();
$conn -> close();