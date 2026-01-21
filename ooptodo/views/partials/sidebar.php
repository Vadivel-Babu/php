<aside class="dashboard__sidebar">
  <div class="dashboard__sidebar--top">
    <h2>TM</h2>
    <a href="dashboard.php">Dashboard</a>
    <?php if ($_SESSION['role'] === 'admin'): ?>
    <a href="user.php">Users</a>
    <?php endif; ?>
    <a href="task.php">Task</a>
    <a href="createtask.php">Create Task</a>
    <a href="createuser.php">Create User</a>
  </div>

  <div class="dashboard__sidebar--bottom">
    <a class="btn btn-info" href="<?= BASE_URL ?>public/logout.php" role="button">Logout</a>
  </div>
</aside>