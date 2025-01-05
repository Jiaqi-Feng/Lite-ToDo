<?php

//Connect to database
$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error){
    die("Connect Fail:" . $conn->connect_error);
}

//Collect data from login form
$emailValue = $_POST['emailIpt'];
$pwordValue = $_POST['pinIpt'];

//Check if data from the form was submitted
if (!isset($_POST['emailIpt'], $_POST['pinIpt']) || empty($emailValue) || empty($pwordValue)){
    $statusVar = "noIpt";
    echo "Please input both email and password.";
    header("Location: index.php?status=" . urlencode($statusVar));
    exit;
}

//Prepare sql stmt
$stmt = $conn -> prepare("SELECT `password` AS hashed_Pword, `uid` as user_id FROM `users` WHERE `email` = ?");
if($stmt === false){
    die("Prepare failed:" . $conn -> error);
}
$stmt-> bind_param("s", $emailValue);
$stmt-> execute(); 
//Bind the result var
$stmt-> bind_result($hashed_Pword, $user_id);

//Retrieve Pword and username, verify passwords and email
if($stmt->fetch()){
    if(password_verify($pwordValue, $hashed_Pword)){
        session_start();
        $_SESSION['user_id'] = $user_id;
        echo "Login success.";
        header("Location: todoList.php");
        exit;

    } else {
        echo "Error: Invalid Password.";
        $statusVar = "invalidPword";
        header("Location: index.php?status=" . urlencode($statusVar));
        exit;
    }
} else {
    echo "Error: Invalid email.";
    $statusVar = "invalidEmail";
    header("Location: index.php?status=" . urlencode($statusVar));
    exit;
}
$stmt->close();
$conn->close();

