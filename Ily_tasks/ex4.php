<?php
// Include the header file
$title = "Exercise 4: Control flow and loops.";
include 'header.php'; 
?>

<!DOCTYPE html>
<html>
<body>



<h3>2:If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, 
    decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form
     to get user input).
</h3>

<!-- Form to submit name and age -->
<div class="container md-6">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Submit Name and Age</h1>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" name="age" id="age" class="form-control" placeholder="Enter your age" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

    </div>
</div>



        <div class="col-md-6">
            <?php 
            // Process name and age form submission
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = isset($_POST['name']) ? $_POST['name'] : '';
                $age = isset($_POST['age']) ? $_POST['age'] : '';

                if($age >= 18) {
                    echo "<p>$name, you are eligible for voting .</p>";
                } else {
                    echo "<p>$name you are not eligible for voting .</p>";
                }
            }
            ?>
        </div>

<h3>3:Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h3>



<?php
$currentMonth = date('F'); 

switch ($currentMonth) {
    case 'August':
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $currentMonth so I don't have any holidays.";
        break;
}
?>

<h3>4:For Loop: Write a PHP script that will print the multiplication 
table of a number (n, use form to get user input).</h3>

<div class="container md-6">
    <!-- Form to generate multiplication table -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Generate Multiplication Table</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="mb-3">
                    <label for="number" class="form-label">Enter a Number</label>
                    <input type="text" name="number" id="number" class="form-control" placeholder="Enter a number" required>
                    <div class="invalid-feedback">Please enter a number.</div>
                </div>
                <button type="submit" class="btn btn-primary">Generate Table</button>
            </form>
        </div>
        <div class="col-md-6">
            <?php 
            // Generate multiplication table based on form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = isset($_POST['number']) ? $_POST['number'] : 0;
                
                echo "<h2>Multiplication Table for $number:</h2><ul>";
                
                for ($i = 1; $i <= 10; $i++) {
                    $result = $number * $i;
                    echo "<li>$number x $i = $result</li>";
                }
                
                echo "</ul>";
            }
            ?>
        </div>
    </div>
</div>


<h3>While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>

<body>
    <div class="container mt-5">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="number">Enter a number n:</label>
                <input type="text" class="form-control" id="number" name="n" required>
            </div>
            <button type="submit" class="btn btn-primary">Print Numbers from 1 to n</button>
        </form>
    </div>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $n = isset($_POST['n']) ? $_POST['n'] : 0;


  echo "<h2>Numbers from 1 to $n:</h2>";

  $i = 1;
  while ($i <= $n) {
    echo "<li>$i</li>";
    $i++;
  }

}
?>




<h3>4:Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>


<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");

foreach ($myarray as $element) {
    echo $element . "<br>";
}
?>


<!-- Include the footer file -->
<?php include 'footer.php'; ?>
