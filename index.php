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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript to toggle between login and signup forms
        function toggleForms() {
            var loginForm = document.getElementById('login');
            var signupForm = document.getElementById('signup');
            var toggleButton = document.getElementById('toggleButton');

            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                signupForm.style.display = 'none';
                toggleButton.innerText = 'Sign Up';
            } else {
                loginForm.style.display = 'none';
                signupForm.style.display = 'block';
                toggleButton.innerText = 'Back to Login';
            }
        }
    </script>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Online Attendance</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh; padding-top: 60px;">
        <div class="row w-100">
            <div class="col-12 col-md-6 mx-auto">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="text-center mb-4">For Students & Faculty</h2>
                        <div class="mb-3 text-center">
                            <h4 id="formTitle">Login</h4>
                        </div>

                        <!-- Login form -->
                        <form method="POST" action="login_handler.php" id="login">
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email ID</label>
                                <input class="form-control" id="email" placeholder="Email" type="email" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" id="password" placeholder="Password" type="password" name="password" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>

                        <!-- Signup form (initially hidden) -->
                        <form method="POST" action="signup_handler.php" id="signup" style="display:none;">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input class="form-control" id="name" placeholder="Full Name" type="text" name="name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email ID</label>
                                <input class="form-control" id="email" placeholder="Email" type="email" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" id="password" placeholder="Password" type="password" name="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="user_type" class="form-label">User Type</label>
                                <select class="form-control" name="user_type" required>
                                    <option value="student">Student</option>
                                    <option value="teacher">Faculty</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" type="submit">Sign Up</button>
                            </div>
                        </form>

                        <!-- Button to toggle between login and signup -->
                        <div class="mt-3 text-center">
                            <button id="toggleButton" class="btn btn-link" onclick="toggleForms()">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
