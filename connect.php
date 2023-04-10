<?php
  $conn =  new mysqli("localhost","root","","loginapplication");

  if(!$conn){    
    die(mysqli_error($conn));
  }
?>