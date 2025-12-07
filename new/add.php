<?php 

include 'db.php';
session_start();

$error = '';
$userId = $_SESSION['userId'];
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["name"];
  if(!empty($name)){
    $sql = "INSERT INTO todos (text, userId) values ('$name','$userId')";
    if($con->query($sql)){
     
       header("Location:index.php");
    exit();
    } else {
      $error = "failed to add";
    }
   
  } else {
    $error = "need valid input";
     header("Location:add.php");
    exit();
  }
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>add</title>
  <style>
  .my-width {
    width: 500px;
    max-width: 50%;
  }
  </style>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-sm d-flex justify-content-between">
      <a class="navbar-brand" href="./index.php">Todo</a>
      <a href="./index.php" class="btn btn-dark" role="button">logout</a>
    </div>
  </nav>
  <div class="container-sm mt-1">
    <a href="./index.php" class="btn btn-dark" role="button">Back</a>
  </div>
  <div class="container-sm p-2">
    <?php 
   " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       $error
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>"
     ?>
    <h1 class="text-center">Add Todo</h1>
    <form class="border p-2 my-width mx-auto my-0" method="post">
      <input class="form-control" type="text" name="name" placeholder="Enter Todo" aria-label="default input example">
      <input type="submit" class="btn btn-secondary mt-2" role="button" value="submit">
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>