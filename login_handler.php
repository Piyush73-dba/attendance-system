<?php
session_start();
require_once 'db_config.php'; // Include the database configuration file

// Get the input data from the login form
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the SQL query to find the user by email
$sql = "SELECT id, name, email, password, user_type FROM users WHERE email = ?";

// Prepare and bind
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();
    $stmt->store_result();

    // Check if the email exists in the database
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $name, $db_email, $db_password, $user_type);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $db_password)) {
            // Password is correct, start the session and store user data
            $_SESSION['user_id'] = $id;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $db_email;
            $_SESSION['user_type'] = $user_type;

            // Redirect based on user type
            if ($user_type == 'student') {
                header('Location: dashboard.php');
            } elseif ($user_type == 'teacher') {
                header('Location: teacher_dashboard.php');
            }
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with this email!";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
