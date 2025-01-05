<?php
session_start();
$conn = new mysqli("localhost", "root", "", "test");
$user_id;
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
} else {
    $user_id = $_SESSION['user_id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite To Do|Todo List</title>
    <link rel="stylesheet" href="todoList.css" />
</head>

<!--header-->
<header id="header">
        <h1 class="app-title">Lite To Do</h1>

</header>

<body>

    <div class="general-container">
        <!-- Side nav-->
        <nav class="sidebar">
            <ul>
                <?php if ($user_id != null) {
                    $result_uname = $conn->query("SELECT `username` as username FROM `users` WHERE `uid` = $user_id");
                    $row = $result_uname->fetch_assoc();
                    $username = $row['username']; ?>
                    <div id="nameTag">
                        <p> Welcome, <?php echo $username ?>. </p>
                    </div>
                <?php } ?>
                <li><button id="open-task-form-button">Add a task</button></li>
                <li><button id="all-task-button">All tasks</button></li>
                <li><button id="work-task-button">Work</button></li>
                <li><button id="study-task-button">Study</button></li>
                <li><button id="sport-task-button">Sports and exercise</button></li>
                <li><button id="chore-task-button">Chores and errands</button></li>
            </ul>
            <button id="logoutBtn">Logout</button>

        </nav>

        <main class="list-container">

            <!--Task creation window: show when btn clicked-->
            <section class="task-card hidden" id="create-task">
                <h4 class="title">Add a task:</h4>
                <br>
                <form class="add-task-form">
                    <input class="add-ipt" type="text" name="taskIpt">
                    <select class="taskType" required>
                        <option value="" disabled selected>Task type</option>
                        <option value="work">Work</option>
                        <option value="study">Study</option>
                        <option value="sport">Sports and exercise</option>
                        <option value="chore">Chores and errands</option>
                    </select>
                    <button class="add-task-btn" type="submit">Submit</button>
                    <button class="cancel-task-btn" onclick="hideTaskEntry()">Cancel</button>
                </form>
            </section>

            <!-- List container -->
            <!-- <div class="time-header"><p>time header</p></div> -->
            <section class="task-card todo-section" id="todo-section">
                <!--Todo tasks card-->
                <h4 class="title">What to do:</h4>
                <br>
                <ul class="todo-list">
                    <li class="todo-item item">
                        <span class="text">task 1</span>
                        <input type="checkbox">
                    </li>
                    <li class="todo-item item">
                        <span class="text">task 2</span>
                        <input type="checkbox">
                    </li>
                    <li class="todo-item item">
                        <span class="text">task 3</span>
                        <input type="checkbox">
                    </li>
                    <li class="todo-item item">
                        <span class="text">task 4</span>
                        <input type="checkbox">
                    </li>
                </ul>
            </section>

            <!-- Done tasks card -->
            <section class="task-card done-section" id="done-section">
                <h4 class="title">Already done:</h4>
                <br>
                <ul class="done-list">
                    <li class="done-item item">
                        <span class="text">task 1</span>
                    </li>
                    <li class="done-item item">
                        <span class="text">task 2</span>
                    </li class="done-item item">
                    <li>
                        <span class="text">task 3</span>
                    </li class="done-item item">
                    <li>
                        <span class="text">task 4</span>
                    </li>
                </ul>
            </section>


        </main>
    </div>

    <script src="todoList.js" defer></script>
</body>

</html>