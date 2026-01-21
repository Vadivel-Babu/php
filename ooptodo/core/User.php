<?php

require_once __DIR__ . "/../config/Database.php";

class User
{
  private $db;
  
  public function __construct(){
     $database = new Database();
     $this->db = $database->conn;
  }

  public function createUser($name,$email,$role){
    $password = password_hash($email,PASSWORD_DEFAULT);
      $stmt = $this->db->prepare(
            "SELECT * FROM users WHERE email = :email"
        );
      $stmt->execute([':email' => $email]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      if($user){
        return false;
      }
      $stmt2 = $this->db->prepare(
            "INSERT users(name,email,password,role) values (:name,:email,:password,:role)"
        );
      $stmt2->execute([':name' => $name,':email'=>$email,':password'=>$password,':role' => $role]);
      return true;
  }
  
}