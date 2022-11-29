<?php

  $fullName = explode(" ",$_POST['fullName']);


  
  $fName = $fullName[0];

  $lName = $fullName[1];

  $email = $_POST['email'];

  $reason = $_POST['reason'];

  $text = $_POST['text']."<br>";



  header("Location: /form.php?fName=$fName&lName=$lName&email=$email&reason=$reason&text=$text");
 
?>