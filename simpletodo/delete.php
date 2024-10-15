<?php
  require "./db.php";
  if(isset($_GET["id"])){
    $select_id = $_GET["id"];
    $sql = "DELETE FROM todos WHERE id= $select_id";
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
        die();
    } else {
      header('Location: index.php');
    }

  }
?>