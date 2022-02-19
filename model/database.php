<?php
// Set up the database connection
$dsn = 'mysql:host=cist1220ebs.c6n3bqaz9ft7.us-east-1.rds.amazonaws.com;dbname=My_Guitar_Shop_EBS';
$username = 'admin';
$password = 'pa55word';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>