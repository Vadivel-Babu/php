<?php
include "db.php";

$error ='';

if($_SERVER["REQUEST_METHOD"] == 'POST'){
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $mail = mysqli_real_escape_string($con,$_POST['mail']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $confirmPassword = mysqli_real_escape_string($con,$_POST['confirm_password']);

  if($password !== $confirmPassword){
    $error = "password and confirm password are diffrent";
  } else {
     $sql = "SELECT * FROM users WHERE mail='$mail' LIMIT 1";
     $result = mysqli_query($con,$sql);
     if(mysqli_num_rows($result) == 1){
      $error = "user already exsisted";
     }else {
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
       $sql = "INSERT INTO users (name, mail, password) values ('$name','$mail','$hashedPassword')";
       if($con->query($sql)){
        header("Location:login.php");
        $error = '';
        exit;
      } else{
        $error = 'Somthing went wrong';
      }
    }
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
  <title>Register</title>
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
    <h1 class="text-center">Signup</h1>
    <form class="border p-2 my-width mx-auto my-0" method="post">
      <input class="form-control" type="text" name="name" placeholder="name" aria-label="default input example"
        required>
      <input class="form-control my-2" type="email" name="mail" placeholder="mail" aria-label="default input example"
        required>
      <input class="form-control" type="password" name="password" placeholder="password"
        aria-label="default input example" required>
      <input class="form-control my-2" type="password" name="confirm_password" placeholder="confirm password"
        aria-label="default input example" required>
      <input type="submit" class="btn btn-secondary mt-2" role="button" value="submit">
      <p class="mt-1">Already have an account? <a href="./login.php">login</a> </p>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>