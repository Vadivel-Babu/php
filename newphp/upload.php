<?php

if($_SERVER["REQUEST_METHOD"] == 'POST'){

  if($_FILES['file']['error'] == 0){
    $name = basename($_FILES['file']['name']);
    $upload_dir = 'uploads/';
    $save_to = $upload_dir . $name;
    if( move_uploaded_file($_FILES['file']['tmp_name'],$save_to)){
      echo $name . 'uploaded';
    } else {
      echo 'error';
    }
  }

}