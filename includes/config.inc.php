<?php
  session_start();
  $servername = "localhost"; //change this  accordingly
  $dBUsername = "aisyah";
  $dBPassword = "cantiksangat-2";
  $dBName = "hostel_management_system";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
