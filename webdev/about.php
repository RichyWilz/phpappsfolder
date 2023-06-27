<?php 

$connection = mysqli_connect("localhost", "root");
if($connection){
    echo 'Connection successfully';
}else{
    echo 'Connection unsuccessful';
}

mysqli_select_db($connection, 'photography');

$name = $_POST['name'];
$email = $_POST['email'];
$number  = $_POST['number'];

$sql = "INSERT INTO users(name, email, number ) values ('$name', '$email', '$number')";

mysqli_query($connection, $sql);
header('location:index.php#contact');
?>