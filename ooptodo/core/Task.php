<?php
require_once __DIR__ . "/../config/Database.php";

class Task
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->conn;
    }

    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM tasks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByUser($userId)
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM tasks WHERE assigned_to = ?"
        );
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateStatus($taskId, $status)
    {
        $stmt = $this->db->prepare(
            "UPDATE tasks SET status = ? WHERE id = ?"
        );
        return $stmt->execute([$status, $taskId]);
    }

    public function delete($taskId)
    {
        $stmt = $this->db->prepare(
            "DELETE FROM tasks WHERE id = ?"
        );
        return $stmt->execute([$taskId]);
    }
}