<?php 

//what to do with the data 
if (isset($_POST[submit])) {

$fname=$_POST['$fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$groupid=$_POST['groupid'];

//connect to the database server 
include 'db.php';

//write sql statementto insert data
$sql= "inser into studentinfo(first_name,last_name ,city, groupId
     values '$fname' ,'$lname', '$city','$groupid')";

if ($conn->query($sql)==TRUE) {
echo"your data was recorded";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//close the database connerction
$conn-close( );
}

?>