<?php
include "db.php";
// session_start();

// if($_SERVER["REQUEST_METHOD"] === "POST"){
//   if(!empty($_POST["name"])){
//     $_SESSION["name"] = $_POST["name"];
//     header("location:login.php");
//     exit;
//   }
// }
$sql = "SELECT * FROM img";
 $res = $con->query($sql);  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="imageToUpload" id="imageToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>
  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Action</th>
    </tr>


    <?php
        $var = 0;
        while ($row = $res->fetch_assoc()) {
          $var++;
            echo "
            <tr>
                <td>{$var}</td>
                <td><img src='uploads/{$row["image"]}' style='height:50px;'></td>
             <td>
                
                <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
        </tr>
        ";

        }
        
        ?>

  </table>
</body>

</html>