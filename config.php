<?php
// Database Configuration

define('DB_HOST', 'attendence-mysql.mysql.database.azure.com');
define('DB_USER', 'piyushyadav@attendence-mysql');
define('DB_PASS', 'Piyush@321');
define('DB_NAME', 'attendence_db');


// Application Configuration
define('APP_ENV', 'development');    // Environment ('development' or 'production')
define('BASE_URL', 'http://localhost'); // Base URL of the app

// Security Keys (Optional)
define('SECRET_KEY', 'your-secret-key');

// Error Reporting
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
?>
<?php
// Include configuration file
require 'config.php';

// Connect to the database
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Example query
$result = mysqli_query($connection, "SELECT * FROM students");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . "<br>";
}
?>
if (!defined('APP_ENV')) {
    die('No direct access allowed!');
}
<Files "config.php">
    Order Allow,Deny
    Deny from all
</Files>
define('DB_PASS', getenv('DB_PASS'));
