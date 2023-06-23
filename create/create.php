<?php

include 'configure.php';

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
}


$sql = "INSERT INTO 'users' ('firstname', 'lastname', 'email', 'password', 'gender')
VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

$result = $conn->query($sql);

if($result == true){
    echo 'Successfully created new record';
}else{
    echo 'Error:' .$sql . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Account creation</h1>
    <div><h2>Signup form</h2></div>
    <form action="configure.php" method="POST">
        <label for="fname">First Name </label><br>
        <input type="text" name="firstname" class="firstname" required><br><br>

        <label for="lname">Last Name </label><br>
        <input type="text" name="lastname" class="firstname" required><br><br>

        <label for="email">Email </label><br>
        <input type="email" name="email" class="email" required><br><br>

        <label for="password">Password </label><br>
        <input type="password" name="password" class="password" required><br><br>

        <label for="gender">Gender </label><br>
        <input type="radio" name="gender" class="gender" value="female">
        <input type="radio" name="gender" class="gender" value="male" ><br><br>

        <input type="submit" name="submit" class="submit">
    </form>
</body>
</html>