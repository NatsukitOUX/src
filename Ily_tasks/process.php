<?php
//what to do withe the form data 
$title="Your information";
include 'header.php';
$name= $_POST["name"];
$email=$_POST["email"];

echo "Hello " . $name ."<br> Your eamil id is ". $email ;

include 'footer.php';
?>