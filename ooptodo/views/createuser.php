 <?php 
 include_once __DIR__ . "/../config/config.php";
 include_once __DIR__ . "/partials/header.php";
 include_once __DIR__ . "/../core/User.php";
 $error = '';
 if($_SERVER["REQUEST_METHOD"] == 'POST'){
  $user = new User();
  $name = $_POST['name'];
  $email = $_POST['email'];
  $role = $_POST['role'];
  echo $name . " " .$email . " " . $role;
  if($name == "" || $email == ""){
    $error = 'Please enter all field';
    return;
  }
  if($user->createUser($_POST['name'],$_POST['email'],$_POST['role'])){
    header("Location: user.php");
    exit;
  }
  $error = "user already exists";
 }
?>


 <div class="dashboard">
   <?php include_once __DIR__ ."/partials/sidebar.php";  ?>
   <div class="dashboard__content ">

     <h1 class="text-center">Create User</h1>

     <div class="container form__max-width">
       <?php if($error): ?>
       <div class='alert alert-danger alert-dismissible fade show' role='alert'>
         <?= $error ?>
         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
       </div>
       <?php endif; ?>

       <form method="post">
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Name</label>
           <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="title">
         </div>
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Email</label>
           <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
             placeholder="user@mail.com">
         </div>
         <select name="role" class="form-select" aria-label="Default select example">
           <option value="user">user</option>
         </select>
         <button type="submit" class="btn btn-success mt-3">Create User</button>
       </form>
     </div>
   </div>
 </div>