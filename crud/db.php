<?php
$servername="localhost";
$username ="ilyas23000";
$password="IlFtFA6B";
$dbname="wp_ilyas23000";

//create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {

    die("connertion failed: ". $conn->connect_error);
}

?>