<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
  if(!empty($_POST["name"])){
    $_SESSION["name"] = $_POST["name"];
    header("location:login.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <form method="post">
    <!-- <input name="num1" value="" type="number">
    <input name="num2" value="" type="number">
    <button type="submit">submit</button>
    <br>
    <br>
    <input type="file" name="file" id=""> -->
    <input type="text" name="name" id="">
    <button type="submit">
      submit
    </button>
  </form>
</body>

</html>