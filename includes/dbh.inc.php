<?php
  $conn = mysqli_connect("localhost","root","","harmony_db");
  if(!$conn){
    die("Unable to connect to Database " . mysqli_connect_error($conn));
  };