<?php
include 'db.php';
$id = 0;
$val = '';
if(isset($_GET['id'])){
 $id = $_GET['id'];
 $sql = "DELETE FROM todos WHERE ID='$id'";
  $res = $con->query($sql); 
 if($res){
  header("Location:index.php");
 } else{
  echo 'somthing wrong';
 }
}


?>