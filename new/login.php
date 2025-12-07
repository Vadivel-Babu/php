<?php
include "db.php";
session_start();

$error ='';

if($_SERVER["REQUEST_METHOD"] == 'POST'){
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $mail = mysqli_real_escape_string($con,$_POST['mail']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
     $sql = "SELECT * FROM users WHERE mail='$mail' LIMIT 1";
     $result = mysqli_query($con,$sql);
     if(mysqli_num_rows($result) == 1){
      $user = mysqli_fetch_assoc($result);
      if(password_verify($password,$user['password'])){
        $_SESSION['logged_in'] = true;
        $_SESSION['name'] = $user['name'];
        $_SESSION['userId'] = $user['id'];
        header("Location:index.php");
        exit;
      } else{
        $error = "Invalid Password";
      }
     }else {
      $error = "user not found";
  
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Login</title>
  <style>
  .my-width {
    width: 500px;
    max-width: 50%;
  }
  </style>
</head>

<body>
  <div class="container-sm p-2 mt-5">
    <?php if($error): ?>
    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <?= $error ?>
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
    <?php endif; ?>
    <h1 class="text-center">Login</h1>
    <form class="border p-2 my-width mx-auto my-0" method="post">
      <input class="form-control" type="text" name="name" placeholder="name" aria-label="default input example"
        required>
      <input class="form-control my-2" type="mail" name="mail" placeholder="mail" aria-label="default input example"
        required>
      <input class="form-control" type="password" name="password" placeholder="password"
        aria-label="default input example" required>
      <input type="submit" class="btn btn-secondary mt-2" role="button" value="submit">
      <p class="mt-1">Don't you have an account? <a href="./register.php">signup</a> </p>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>