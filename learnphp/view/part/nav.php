 <nav class="space-x-2 bg-gray-100 p-2 text-black">
   <a href="index.php"
     class="font-bold text-xl hover:text-red-200 p-2  <?php echo ($_SERVER['REQUEST_URI'] === '/learnphp/index.php') ? "bg-black text-white" : '' ?>">Home
   </a>
   <a href="about.php"
     class="font-bold text-xl hover:text-red-200 p-2 <?php echo ($_SERVER['REQUEST_URI'] === '/learnphp/about.php') ? "bg-black text-white" : '' ?>">About</a>
 </nav>
 <h1 class="text-center mt-5 text-4xl font-bold"><?= $heading  ?></h1>