<?php

$title = "Exercise 4: Control flow and loops.";
include 'header.php'; 
?>


<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">


  
</form>


<div class="container mt-5">
    <h1 class="text-center mb-4">Generate Multiplication Table</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="mb-3">
                    <label for="number">Enter a Number</label>
                    <input type="text" name="number" id="number" class="form-control" placeholder="Enter a number" required>
                    <div class="invalid-feedback">Please enter a number.</div>
                    Name: <input type="text" name="name" required>
  <br>Age: <input type="text" name="age" required>
  <input type="submit" value="Submit">
                </div>
                <button type="submit" class="btn btn-primary">Generate Table</button>
            </form>
        </div>
    </div>
</div>



<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') 

$name =isset($_POST['name']) ? $_POST['name'] :'';
$age = isset($_POST['age']) ? $_POST['age'] :'';

if($age>= 18){
    echo  "<br>$name, you are eligible for voting $age.";

}else{

    echo "<br>$name you are not eligibel for voting because you are $age.";
}


?>



<?php 

$current_month =date('F');

switch($current_month){
case'August':
echo "<br> It's August, so it's still holiday";
break;
default:
echo "<br> Not August,this is $current_month so I don't have any holidays";
break;

}


?>


<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $number = isset($_POST['number']) ? $_POST['number'] : 0;
    
    echo "<h2>Multiplication Table for $number:</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
      $result = $number * $i;
      echo "<li>$number x $i = $result</li>";
    }
    echo "</ul>";
  }

?>



<?php  include 'footer.php';  ?>