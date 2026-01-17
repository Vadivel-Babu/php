<?php
require_once __DIR__ . "/../config/config.php";
require_once "../core/Auth.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new Auth();
    if ($auth->login($_POST['email'], $_POST['password'])) {
        header("Location: ../views/admin-dashboard.php");
        exit;
    } else {
        $error = "Invalid login";
    }
}
?>

<?php require_once __DIR__ . "/../views/partials/header.php"  ?>

<div class="form__max-width">
  <h1 class="text-center mb-3">Login</h1>
  <form method="POST" class="container">
    <input type="email" class="form-control" id="staticEmail2" placeholder="email@example.com">
    <input type="password" class="form-control my-3" id="inputPassword2" placeholder="Password">
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>


<?php if (!empty($error)) echo $error; ?>