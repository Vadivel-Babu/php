 <?php 
 include_once __DIR__ . "/../config/config.php";
 include_once __DIR__ . "/partials/header.php";
?>


 <div class="dashboard">
   <?php include_once __DIR__ ."/partials/sidebar.php";  ?>
   <div class="dashboard__content ">
     <h1>Task</h1>
     <table class="table">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">First</th>
           <th scope="col">Last</th>
           <th scope="col">Handle</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">1</th>
           <td>Mark</td>
           <td>Otto</td>
           <td>@mdo</td>
         </tr>
         <tr>
           <th scope="row">2</th>
           <td>Jacob</td>
           <td>Thornton</td>
           <td>@fat</td>
         </tr>
         <tr>
           <th scope="row">3</th>
           <td>John</td>
           <td>Doe</td>
           <td>@social</td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>