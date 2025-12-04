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
  $newText = $_POST['text'];
  $sql = "UPDATE todos SET text='$newText' WHERE ID='$id'";
  $res = $con->query($sql); 
 if($res){
  header("Location:index.php");
 } else{
  echo 'somthing wrong';
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
  <?= $id ?>
  <br>
  <?=  $val ?>
  <form method="post">
    <input type="text" name='text' value="<?= $val ?>" placeholder="text" />
    <input type="submit" value="update">
  </form>
</body>

</html>