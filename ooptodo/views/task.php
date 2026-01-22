<?php 
 include_once __DIR__ . "/../config/config.php";
 include_once __DIR__ . "/partials/header.php";
 include_once __DIR__ . "/../core/Task.php";
 $tasks = new Task();
 $alltasks = $tasks->getAll();

?>


<div class="dashboard">
  <?php include_once __DIR__ ."/partials/sidebar.php";  ?>
  <div class="dashboard__content ">
    <h1 class="text-center"> Task</h1>
    <table class="table container">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach($alltasks as $task): ?>
        <tr>
          <th scope="row"><?= $no ?></th>
          <td><?= $task['title'] ?></td>
          <td><?= $task['description'] ?></td>
          <td><span class="badge text-bg-warning"><?= $task['status'] ?></span></td>
          <td>
            <a href="edittask.php?id=<?= $task['id'] ?>" class="btn btn-dark" role="button">Edit</a>
            <button type="button" class="btn btn-danger delete-btn" data-id="<?= $user['id'] ?>">Delete</button>
          </td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>