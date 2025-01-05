<?php
//Connect to database
$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error){
    die("Connect Fail:" . $conn->connect_error);
} 

//Collect data from signUp form
$usernameValue = $_POST['usernameIpt'];
$emailValue = $_POST['sign-up-emailIpt'];
$pwordValue = $_POST['sign-up-pinIpt'];
//$pwordConfirmValue = $_POST['pin-confirmIpt'];

//Check if the passwords are matched
//if($pwordValue !== $pwordConfirmvalue){
    //Redirect with wrongPassword msg
    //$statusVar = "wrongPword";
    //header("Location: signUp.php?status=" . urlencode($statusVar));
    //exit;
//}

if (!isset($_POST['usernameIpt'], $_POST['sign-up-emailIpt'], $_POST['sign-up-pinIpt']) || empty($usernameValue) || empty($emailValue) ||empty($pwordValue)){
    $statusVar = "noIpt";
    echo "Please input all information.";
    header("Location: signUp.php?status=" . urlencode($statusVar));
    exit;
}

//Hash the password
$hashed_Pword = password_hash($pwordValue, PASSWORD_DEFAULT);
//Prepare sql statement
$stmt = $conn -> prepare("INSERT INTO `users` (username, email, `password`) VALUES (?, ?, ?)");
if($stmt === false){
    die("Prepare failed:" . $conn -> error);
}
$stmt -> bind_param ("sss", $usernameValue, $emailValue, $hashed_Pword);

//Logic to signUp php file
if($stmt -> execute()){
    //Redirect with success msg
    $statusVar = "success";
    echo "Sign up success.";
    header("Location: signUp.php?status=" . urlencode($statusVar));
    exit;
} else {
    //Redirect with error msg
    $statusVar = "error";
    echo "An error occurred.";
    header("Location: signUp.php?status=" . urlencode($statusVar));
    exit;
}
$stmt->close();
$conn->close();