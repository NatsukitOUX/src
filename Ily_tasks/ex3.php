<?php 
$title = "Exercise 3: Variables, Strings & Operators";
include 'header.php';
?>

<h1>Form Creation: Create a simple HTML form to collect 
    the user’s Firstname and Lastname. Use the echo statement
     to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an 'h3' tag </h1>

<div class="container mt-5">
    <h1 class="text-center mb-4">Contact Us</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" required>
                    <div class="invalid-feedback">Please enter your name.</div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="john@example.com" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
               
                <div class="mb-3">
                    <label for="dob">Choose your Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<?php
$str1 = "Hello";
$str2 = "World";

$joinedString = $str1 . $str2;
$length = strlen($joinedString);

echo "Joined str: " . $joinedString . "<br>";
echo "Length of Joined Str: " . $length;
?>

<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
echo  "<br>" ."Number addition equals to: "  . ($num1 + $num2 + $num3)  ;
?>

<?php

if($_SERVER['PHP_SELF']) {
  $name= $_POST["name"];
  $email=$_POST["email"];
    
    echo "<br>" ."Hello, $name Your eamil id is:  $email ";

}

?>


<?php include 'footer.php'; ?>
