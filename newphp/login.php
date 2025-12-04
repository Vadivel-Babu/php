<?php 

session_start();

$name = "";

if($_SESSION['name'] === 'vadi'){

  $name = $_SESSION['name'];

} else{
  header("location:index.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>logged</title>
</head>

<body>
  <h1>Welcome <?= $name  ?> </h1>
  <a href="logout.php">logout</a>

</body>

</html>