<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Nice to have you here </h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore totam minima vitae ipsa facere. Eveniet, molesti
        ae dolorem dolor minus corporis quaerat, nam labore dignissimos quibusdam sequi odio obcaecati non. Vero?</p>
    <a href="ex3.php" class="btn btn-primary">Contact Us</a>
  </div>
</div>


<?php

$currentFile = basename($_SERVER['PHP_SELF']);
$lastModifiedTime = filemtime($currentFile);

echo "Last modified: " . date("F d, Y H:i:s", $lastModifiedTime);
?>