<!-- conn.php -->

<?php 
session_start();
// error_reporting(0);
// Connection with database in conn.php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'waf';


$conn = mysqli_connect($host,$username,$password,$db);


if(!$conn){
    echo "Connection Error: Error ID " . mysqli_connect_errno($conn);
}
else{
    echo "Database is connected";
}

?>