<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$con = mysqli_connect("localhost","root",'',"todo");

if(!$con){
  echo mysqli_connect_error();
  exit;
}

$data = json_decode(file_get_contents("php://input"), true);
$method = $_SERVER['REQUEST_METHOD'];

if ($method === "GET") {
   $sql = "SELECT * FROM todos";
  $res = $con->query($sql);
  $tasks = $res->fetch_all(MYSQLI_ASSOC);
  echo json_encode(["message" => "Fetching data","data" => $tasks]);
} elseif ($method === "POST") {
    $task = $data['task'];
    $sql = "INSERT INTO todos (text) values ('$task')";
    if($con->query($sql)){
       $sql = "SELECT * FROM todos";
       $res = $con->query($sql);
       $tasks = $res->fetch_all(MYSQLI_ASSOC);
      echo json_encode(["message" => "POST request","data" =>$tasks]);
    }
} elseif($method === "DELETE"){
    $id = $data['id'];
    $sql = "DELETE FROM todos WHERE ID='$id'";
    $res = $con->query($sql); 
} elseif($method === "PUT"){
  $id = $data['id'];
  $task = $data['task'];
   $sql = "UPDATE todos SET text='$task' WHERE ID='$id'";
    $res = $con->query($sql); 
    echo json_encode(["message" => "put request","data" =>"success"]);
}