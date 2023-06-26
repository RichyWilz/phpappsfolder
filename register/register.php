<?php
 $DATABASE_HOST = 'localhost'; 
 $DATABASE_USER = 'root';
 $DATABASE_PASS = ''; 
 $DATABASE_NAME = 'form';
 
 $conn = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

if ($conn->connect_error){
    die('Failed to connect to server'. $conn->connect_error);
}
// validating emptiness
if(empty($_POST['name']) || empty($_POST['password']) || empty($_POST['email'])){
    exit('Empty value/s.');
} 

// checking for similar username in db stmt->statement
if($stmt = $conn->prepare("SELECT id, password FROM users WHERE Name = ? ")){
    $stmt -> bind_param('s', $_POST['name']);
    $stmt -> execute();
    $stmt ->store_result();

    if($stmt->num_rows>0){
        echo 'Username already exists, use another';
    }else{
        if($stmt = $conn->prepare("INSERT INTO users (Name, Password, Email) values (?,?,?)")){
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt -> bind_param('sss',$_POST['name'], $password, $_POST['email'] );
            $stmt->execute();
            echo 'Successfully registered';
        }else{
            echo 'Error occured';
        }
        $stmt->close();
    }
} else{
    echo 'Error occurred';
}
$conn->close();
?>