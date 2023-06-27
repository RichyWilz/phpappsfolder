<?php
session_start();
include 'config.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['name']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data; 
    }
}
$name = validate($_POST['name']);
$password = validate($_POST['password']);

if(empty($name)){
    header("Location: index.php?error= Required username");
    exit();
}else if(empty($password)){
    header("Location: index.php?error= Required password");
    exit();
}

$sql = "SELECT * FROM user WHERE name = '$name' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['name'] === $name && $row['password'] === $password){
        echo 'Logged in';
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }
    // else{
    //     header("Location: index.php?error= Incorrect ");
    //     exit();
    // }
}else{
    header("Location: index.php?error=Incorrect username or password");
    exit();
}
?>