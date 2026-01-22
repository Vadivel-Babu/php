 <?php 
 include_once __DIR__ . "/../config/config.php";
 include_once __DIR__ . "/partials/header.php";
 if($_SESSION['role'] !== 'admin'){
   header("Location: dashboard.php");
   exit;
 }
?>


 <div class="dashboard">
   <?php include_once __DIR__ ."/partials/sidebar.php";  ?>
   <div class="dashboard__content ">
     <h1 class="text-center">Create Task</h1>
     <div class="container form__max-width">
       <form method="post">
         <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Title</label>
           <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="title">
         </div>
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Description</label>
           <input type="description" class="form-control" id="exampleFormControlInput1" placeholder="description ...">
         </div>
         <button type="submit" class="btn btn-success">Create Task</button>
       </form>
     </div>
   </div>
 </div>

 <?php include_once __DIR__ . "/partials/footer.php"; ?>