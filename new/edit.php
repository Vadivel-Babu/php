<?php
include 'db.php';
$id = 0;
$val = '';
if(isset($_GET['id'])){
 $id = $_GET['id'];
  $sql = "SELECT * FROM todos WHERE ID=$id";
 $res = $con->query($sql); 
 if($res){
  $data = $res->fetch_assoc();
  $val = $data['text'];
 }
}else{
  echo "error";
}

if($_SERVER["REQUEST_METHOD"] === 'POST'){
  $newText = $_POST['name'];
  if(!empty($newText)){
    $sql = "UPDATE todos SET text='$newText' WHERE ID='$id'";
    $res = $con->query($sql); 
    if($res){
     header("Location:index.php");
    } 
  }else{
  echo 'somthing wrong';
  header("Location:edit.php");
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
  <title>Edit</title>
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
  <div class="container-sm p-2 bg-gradient">
    <h1 class="text-center">Edit Todo</h1>
    <form class="border p-2 my-width mx-auto my-0" method="post">
      <input class="form-control" type="text" name="name" value=" <?=  $val ?>" placeholder="Enter Todo"
        aria-label="default input example">
      <input type="submit" class="btn btn-outline-success mt-2" role="button" value="Update">
    </form>
  </div>
</body>

</html>