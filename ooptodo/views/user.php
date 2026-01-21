 <?php 
 include_once __DIR__ . "/../config/config.php";
 include_once __DIR__ . "/partials/header.php";
 include_once __DIR__ . "/../core/User.php";
?>


 <div class="dashboard">
   <?php include_once __DIR__ ."/partials/sidebar.php";  ?>
   <div class="dashboard__content ">
     <h1 class="text-center"> User</h1>
     <table class="table container">
       <thead>
         <tr>
           <th scope="col">No</th>
           <th scope="col">Name</th>
           <th scope="col">Email</th>
           <th scope="col">Active</th>
           <th scope="col">Action</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">1</th>
           <td>Mark</td>
           <td>Otto</td>
           <td><span class="badge text-bg-success">active</span></td>
           <td>
             <button type="button" class="btn btn-danger">Delete</button>
             <a role="button" class="btn btn-warning">Edit</a>
           </td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>