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
  <title>Todo</title>
</head>

<body>
  <nav class="bg-black py-2">
    <h1 class="text-4xl font-bold text-white text-center">Todo</h1>
  </nav>

  <a href="create.php">
    <button class="btn btn-success m-3">Add Text</button>
  </a>
  <ul class="list-group max-w-[300px] mx-auto">
    <?php
    if ($result->num_rows > 0) {
       
        while ($row = $result->fetch_assoc()) {?>
    <li class="list-group-item flex justify-between">
      <?= $row['text'] ?>
      <span>
        <a href="delete.php?id=<?=$row['id'] ?>" class="btn btn-danger">Delete</a>
        <a href="edit.php?id=<?=$row['id'] ?>"><button class="btn btn-warning">Edit</button></a>
      </span>
    </li>
    <?php }
   
    } else {
        echo "No Todos";
    }
    $conn->close();
?>
  </ul>
</body>

</html>