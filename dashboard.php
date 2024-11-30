<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['student_id'])) {
    header('Location: index.php');
    exit();
}

// Get student data from session
$student_id = $_SESSION['student_id'];
// You can also fetch the student data from a database, such as their name, email, and attendance history.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Student Dashboard</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active"><a class="nav-link" href="attendance.php">View Attendance</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2>Welcome, Student!</h2>
                        <p>Your recent attendance data will be displayed here.</p>

                        <!-- Example Attendance Table -->
                        <h4>Attendance Overview</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example Attendance Entries -->
                                <tr>
                                    <td>Math</td>
                                    <td>2024-11-30</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>Science</td>
                                    <td>2024-11-29</td>
                                    <td>Absent</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
