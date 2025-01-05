<?php
$conn = new mysqli("localhost", "root", "", "test");

$loginMsg = '';
$loginStatus = isset($_GET['status']) ? urldecode($_GET['status']) : '';
if ($loginStatus != null) {
    $loginMsg = $loginStatus;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite To Do|Log In</title>
    <link rel="stylesheet" href="loginStyle.css" />
</head>

<body>
    <!--header-->
    <header id="header">
        <h1 class="app-title">Lite To Do</h1>
    </header>

    <main>
        <!--Login form container-->
        <div class="login-card" id="login-card">
            <p class="login-title">Login to Your Account</p>
            <br>
            <?php if ($loginMsg == 'invalidEmail') { ?>
                <div class="login-msg">
                <p class="text">
                Invaild email address, please try again.
                </p>
                </div>
            <?php } elseif ($loginMsg == 'invalidPword') { ?>
                <div class="login-msg">
                <p class="text">
                Invaild password, please try again.
                </p>
                </div>
            <?php } elseif ($loginMsg == 'noIpt') {?>
                <div class="login-msg">
                <p class="text">
                Please input both email and password.
                </p>
                </div>
            <?php } ?>

            <form class="log-in-form" action="login_db.php" method="post">

                <div class="innerLoginForm">
                    <label class="textLabel" for="emailIpt">Email:<sup>(*)</sup></label>
                    <input type="text" name="emailIpt" id="emailIpt" autocapitalize="off" autocorrect="off">
                    <br>
                    <label for="pinIpt">Password:<sup>(*)</sup></label>
                    <input class="textLabel" type="password" name="pinIpt" id="pinIpt">
                    <br>
                    <div class="login-btn-container"><button class="login-btn">Login</button></div>

            </form>
            </div>
                <br>
                <div class="no-account-msg">
                    <p class="text">Do not have an account?</p>
                </div>
                <div class="sign-up-link-container">
                    <a href="signUp.php" id="sign-up-link">Sign Up</a>
                </div>
        </div>
    </main>
</body>
<script src="todoList.js"></script>

</html>