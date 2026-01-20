<aside class="dashboard__sidebar">
  <a href="dashboard.php">Dashboard</a>

  <?php if ($_SESSION['role'] === 'admin'): ?>
  <a href="user.php">Users</a>
  <?php endif; ?>
  <a href="task.php">Task</a>
  <a href="createtask.php">Create Task</a>

  <a href="<?= BASE_URL ?>public/logout.php">Logout</a>
</aside>