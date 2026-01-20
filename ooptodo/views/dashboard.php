 <?php 
 include_once __DIR__ . "/../config/config.php";
 include_once __DIR__ . "/partials/header.php";
?>


 <div class="dashboard">
   <?php include_once __DIR__ ."/partials/sidebar.php";  ?>
   <div class="dashboard__content ">
     <h1><?= $_SESSION['role']; ?></h1>
   </div>
 </div>