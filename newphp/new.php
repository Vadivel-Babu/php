<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  if($num1 < 0 or $num2 < 0){
     echo '<h1> $num1 or $num2 less than zero </h1>';
  } else {
    $num3 = $num1 + $num2;
    echo '<h1>' . $num3 . '</h1>';

  }
}