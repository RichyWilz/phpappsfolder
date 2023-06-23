<?php 
// removed the db or perhaps renamed it and changed it to mydb
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root','', 'test1') or 
        die('connection failed:' . mysqli_connect_error());}

    if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])
     && isset($_POST['bloodgroup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bloodgroup = $_POST['bloodgroup'];
     }
    $sql = "INSERT INTO `users` (`name`, `email`, `phone`, `bloodgroup`) 
    VALUES ('$name', '$email', '$phone', '$bloodgroup')" ;

    $query = mysqli_query($conn, $sql);

    if($query){
        echo 'Sucessfully updated table';
    }else{
        echo 'An error occurred, please try again.';
    }
?>