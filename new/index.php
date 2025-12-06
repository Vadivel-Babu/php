<?php
session_start();
$_SESSION['name'] = 'vadi'; 
 include 'db.php';


if($_SESSION['name'] !== 'vadi'){
  header("Location:register.php");
}

 $sql = "SELECT * FROM todos";
 $res = $con->query($sql);  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Todo</title>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-sm d-flex justify-content-between">
      <a class="navbar-brand" href="./index.php">Todo</a>
      <a href="./index.php" class="btn btn-dark" role="button">logout</a>
    </div>
  </nav>
  <div class="container-sm mt-1">
    <a href="./index.php" class="btn btn-dark" role="button">Back</a>
  </div>
  <div class="container-sm">
    <div class="d-flex justify-content-center align-items-center gap-3 my-5 p-1">
      <h1>Welcome name</h1>
      <a href="./add.php" class="btn btn-secondary" role="button">Add Todo</a>
    </div>

    <table class="table table-striped w-50 my-0 mx-auto">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
      <?php
          $var = 0;
          while ($row = $res->fetch_assoc()) {
            $var++;
              echo "
              <tr scope='row'>
                  <td>{$var}</td>
                  <td>{$row['text']}</td>
               <td>
                  <a href='edit.php?id={$row['id']}' type='button' class='btn btn-warning'>Edit</a>
                  <a href='delete.php?id={$row['id']}' type='button' class='btn btn-danger'>Delete</a>
              </td>
          </tr>
          ";
  
          }
          
          ?>

    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>