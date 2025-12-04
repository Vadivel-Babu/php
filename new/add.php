<?php 

include 'db.php';

$names = [];
$message = "";
$error = '';

 if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["name"];
  if(!empty($name)){
    $sql = "INSERT INTO todos (text) values ('$name')";
    if($con->query($sql)){
      $message = "successfully added";
    } else {
      $message = "failed to add";
    }
    $error = '';
    header("Location:index.php");
    exit();
  } else {
    $error = "need valid input";
     header("Location:index.php");
    exit();
  }
 }