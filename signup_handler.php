<?php
session_start();
require_once 'db_config.php'; // Include the database configuration file

// Get user inputs from the form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];

// Hash the password using BCRYPT
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Prepare the SQL query to insert user data
$sql = "INSERT INTO users (name, email, password, user_type) VALUES (?, ?, ?, ?)";

// Prepare and bind
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("ssss", $name, $email, $hashed_password, $user_type);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Signup successful!";
        // Optionally, you can redirect the user to the login page after signup
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
