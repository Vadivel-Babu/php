<?php

session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $name = $_POST["name"];
  $pass = $_POST["password"];
  $hash = password_hash("1234", PASSWORD_DEFAULT);
  $_SESSION['username'] = $name;
 $_SESSION['pass'] =  $hash;
 if (password_verify(  $pass, $hash)) {
   
    header("location:home.php");
    exit;
} else {
    echo "Invalid password.";
}
  // echo $name . " " . $pass . " " . $hash;
}