<?php 
$title="Exercise 3: Variables, Strings & Operators";
include 'header.php'; ?>


<h1>Form Creation: Create a simple HTML form to collect 
    the user’s Firstname and Lastname. Use the echo statement
     to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an 'h3' tag </h1>


<div class="container mt-5">
        <h1 class="text-center mb-4">Contact Us</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="contact-form">
                    <div class="mb-3">
                        <label >Fist Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="John " required>
                    </div>
                    <div class="mb-3">
                        <label >Last Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Doe" required>
                    <div class="mb-3">
                        <label >Choose your color</label>
                        <input type="color"  name="color"  required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </d iv>





<?php include 'footer.php'; ?>