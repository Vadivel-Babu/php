<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "todos";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for registering a student
if (isset($_POST['submit'])) {
    $name = $_POST['text'];
    if($name !== ""){
    $sql = "INSERT INTO todos (text) 
            VALUES ('$name')";

    }

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
        die();
    } 
}

if (isset($_POST['update'])) {
    $name = $_POST['text'];
    $id = $_POST['id'];
   
    $sql = "UPDATE todos SET text = '$name' WHERE id=$id";


    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
        die();
    } 
}



// Fetch and display registered students
$sql = "SELECT * FROM todos";
$result = $conn->query($sql);