<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php"); // Redirect to login if not authenticated
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance Dashboard</title>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <p>Welcome to the Attendance Management System.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
