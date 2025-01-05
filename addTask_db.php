<?php
session_start();


//Check user authority
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit;
}
//Connect to database
$conn = new mysqli("localhost", "root", "", "test");

//Get the JSON from js
$data = json_decode(file_get_contents("php://input"), true);
$task = $data['newTask'];
$type = $data['taskType'];



//Prepare sql query, add task to database
$stmt = $conn -> prepare("INSERT INTO `todos` (`uid`, task, `type`) VALUES (?, ?, ?)");
if($stmt === false){
    die("Prepare failed:" . $conn -> error);
}
$stmt -> bind_param ("iss", $_SESSION['user_id'], $task, $type);


if($stmt -> execute()){
    //Redirect with success msg
    $statusVar = "success";
    echo "Task saved successfully.";
    exit;
} else {
    //Redirect with error msg
    $statusVar = "error";
    echo "An error occurred.";
    exit;
}

$stmt -> close();
$conn -> close();