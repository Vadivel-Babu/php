 <?php 
 include_once __DIR__ . "/../config/config.php";
 include_once __DIR__ . "/partials/header.php";
?>


 <div class="dashboard">
   <?php include_once __DIR__ ."/partials/sidebar.php";  ?>
   <div class="dashboard__content ">
     <h1 class="text-center">Create User</h1>
     <div class="container form__max-width">
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
         <button type="submit" class="btn btn-success">Create User</button>
       </form>
     </div>
   </div>
 </div>