<?php
// config.php - Database connection configuration

$host = 'localhost:3308';
$dbname = 'hotel_db';
$user = 'root';
$pass = '';

// Connect DB
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, set character set to utf8
$conn->set_charset("utf8");


// Razorpay API keys
define('RAZORPAY_KEY', 'rzp_live_RRpddNdCYcv0eu');
define('RAZORPAY_SECRET', 'fU1ixjdRseKdk5438KHzQag0');
?>
