<?php 

$con = mysqli_connect("localhost","root",'',"sampletodo");

if(!$con){
  echo mysqli_connect_error();
  exit;
}else{
  echo "db connected";
}