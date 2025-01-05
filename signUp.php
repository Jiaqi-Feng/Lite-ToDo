<?php
$conn = new mysqli("localhost", "root", "", "test");

$signUpMsg = 'new';
$signUpStatus = isset($_GET['status']) ? urldecode($_GET['status']) : '';
if($signUpStatus != null){
    $signUpMsg = $signUpStatus;
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite To Do|Sign Up</title>
    <link rel="stylesheet" href="signUp.css" />
</head>

<body>
    <!--header-->
    <header id="header">
        <h1 class="app-title">Lite To Do</h1>
    </header>

    <main>
        <!--Login form container-->
        <div class="sign-up-card" id="sign-up-card">
            <p class="sign-up-title">Sign Up</p>
            <br>
            <?php if($signUpMsg !== 'success') {?>
            
                <?php if($signUpMsg == 'wrongPword'){ ?>
                    <div class="sign-up-msg">
                    <p class="text">The passwords you entered do not match.</p>
                    </div>
                <?php } elseif ($signUpMsg == 'error') { ?>
                    <div class="sign-up-msg">
                    <p class="text">
                    An error occurred. Please try again.
                    </p>
                    </div>
                <?php } elseif ($signUpMsg == 'noIpt') {?>
                    <div class="sign-up-msg">
                    <p class="text">
                    Please input all information.
                    </p>
                    </div>
                <?php } ?>
            <form class="sign-up-form" action ="signUp_db.php" method ="post">
                <label class="usernameLabel" for="usernameIpt">Username:<sup>(*)</sup></label>
                <input type ="text" name="usernameIpt" id="usernameIpt">
                <br>
                <label class="textLabel" for="sign-up-emailIpt">Email:<sup>(*)</sup></label>
                <input type="text" name="sign-up-emailIpt" id="sign-up-emailIpt" autocapitalize="off" autocorrect="off">
                <br>
                <label for="sign-up-pinIpt">Password:<sup>(*)</sup></label>
                <input class="textLabel" type="password" name="sign-up-pinIpt" id="sign-up-pinIpt">
                <br>
                <button class="signUp-btn">Sign Up</button>
            </form>
            <?php } else { ?>
                <div class="sign-up-msg">
                    <p class="text">Your account has been created!</p>
                </div>  
            <?php } ?>
            <br>
                <div class="back-to-login-container">
                    <a href="index.php" id="back-to-login-link">Login</a>
                </div>
        </div>
    </main>
</body>
</html>