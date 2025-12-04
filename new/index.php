<?php 
 include 'add.php';
 include 'db.php';
 
 $sql = "SELECT * FROM todos";
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
  <form action="add.php" method="post">
    <input type="text" name="name" id="">
    <input type="submit" value="submit">
  </form>

  <ul>
    <p><?= $error ?></p>
    <p><?= $message ?></p>
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
                <td>{$row['text']}</td>
             <td>
                <a href='edit.php?id={$row['id']}'>Edit</a>
                <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
        </tr>
        ";

        }
        
        ?>

    </table>
</body>

</html>