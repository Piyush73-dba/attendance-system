<?php
session_start();
$isIndex = 1;

// Check if the user is already logged in
if (isset($_SESSION['student_id'])) {
    header('Location: dashboard.php'); // Redirect to student dashboard
    exit();
} elseif (isset($_SESSION['teacher_id'])) {
    header('Location: teacher.php'); // Redirect to teacher dashboard
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Student Attendance</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Online Attendance</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2>For Students</h2>
        <hr>
        <h4>Login</h4>
        <form method="POST" action="login_handler.php" id="login">
            <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password" required>
            </div>
            <button class="btn btn-primary pull-right">Login</button>
        </form>
        <h4>Signup</h4>
        <form method="POST" action="signup_handler.php" id="signup">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" placeholder="Name" type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password" required>
            </div>
            <button class="btn btn-primary pull-right">Sign Up</button>
        </form>
    </div>
</body>
</html>
