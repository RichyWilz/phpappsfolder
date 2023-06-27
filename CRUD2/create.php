<?php

include 'configure.php';

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
}


$sql = "INSERT INTO users (firstname, lastname, email, password, gender) 
VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

$result = $conn->query($sql);

if($result){
    // header('Location:view.php');
    echo 'Successfully created new record';
}else{
    echo 'Error:' .$sql . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">


<body>
    <div><h2>Signup form</h2></div>
    <form action="create.php" method="POST">
        <fieldset>
        <label for="fname">First Name </label><br>
        <input type="text" name="firstname" id="firstname"><br><br>

        <label for="lname">Last Name </label><br>
        <input type="text" name="lastname" id="firstname"><br><br>

        <label for="email">Email </label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="password">Password </label><br>
        <input type="password" name="password" id="password"><br><br>

        <label for="gender">Gender </label><br>
        <input type="radio" name="gender" id="gender" value="female">Female
        <input type="radio" name="gender" id="gender" value="male" >Male<br><br>

        <input type="submit" name="submit" id="submit">

        </fieldset>  
    </form>
</body>
</html>