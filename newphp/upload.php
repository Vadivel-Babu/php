<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"] == 'POST'){
 
  if($_FILES['imageToUpload']['error'] == 0){
    $name = basename($_FILES['imageToUpload']['name']);
  
    $upload_dir = 'uploads/';
    $save_to = $upload_dir . $name;
    if( move_uploaded_file($_FILES['imageToUpload']['tmp_name'],$save_to)){
       $sql = "INSERT INTO img (image) values ('$name ')";
         if($con->query($sql)){
           echo $name . 'uploaded';
         } else {
          echo "failed to add";
         }
  
    header("Location:index.php");
    exit();
     
    } else {
      echo 'error';
    }
  }

}