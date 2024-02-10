<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?>  </title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- out css styles load after bootstrap css and have higher priority-->
    <link rel="stylesheet" href="style-html.css">

    
    <style>
        /* Additional CSS styles */
        .h {
            color: blue;
        }
        .navbar {
            background-color: #333; 
        }
        .navbar-nav .nav-link {
            color: #fff; 
        }
        .navbar-nav .nav-link:hover {
            color: #aaa; 
        }
    </style>
</head>
<body> 
 <div class="container">
  <div class="row">

<div class="col-4">
<!--nq;emmm -->
<h1 class="h">My website</h1>

</div>

<div class="col-8">

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ex1.php">Exercise1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="ex2.php">Exercise2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="ex3.php">Exercise3</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link active" href="ex4.php">Exercise4</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">Exercise5</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">Exercise6</a>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php" role="button" data-bs-toggle="dropdown"style='color:black' aria-expanded="false">
            Exercise7
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="update_single.php">Update & Delete Data </a></li>
            <li><a class="dropdown-item" href="read.php">Reade Data</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
            </a>
           
            </ul>
          </li>
          
          
          </li>
        </ul>
        
         
        </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </div>
  </nav>
 
