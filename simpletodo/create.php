<?php
  require "./db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>create</title>
</head>

<body>
  <nav class="bg-black py-2">
    <h1 class="text-4xl font-bold text-white text-center">Create Todo</h1>
  </nav>
  <a href="index.php">
    <button type="button" class="btn btn-dark m-3">Back</button>
  </a>


  <form action="index.php" method="post" class="shadow-lg p-2 w-max mx-auto my-10">
    <input type="text" name="text" placeholder="Add Todo..." class="border py-2 px-3 outline-none">
    <input type="submit" name="submit" class="ml-4 px-3 py-1 bg-green-300 rounded-lg" />
  </form>

</body>

</html>