<?php

include 'configure.php';

if(isset($_POST['submit'])){
    $user_id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `users` (`firstname`, `lastname`, `email`, `password`, `gender`)
    SET '$firstname'= '$first_name', '$lastname'= '$last_name',
     '$email'= '$email', '$password'= '$password', '$gender'= $gender WHERE 'id'= '$user_id'";

    $result = $conn->query($sql);

    if($result == true){
        echo 'Successfully updated record';
    }else{
        echo 'Error:' .$sql . $conn->error;
    }

    $conn->close();
}

if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "SELECT *FROM `users` WHERE `id`=$user_id";

    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $first_name = $row['firstname'];
            $last_name = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
            $id = $row['id'];
        }
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
   
    <div><h2>Update record</h2></div>
    <form action="" method="POST">
    <input type="hidden" name="user_id" value=<?php echo $id; ?>>

        <label for="fname">First Name </label><br>
        <input type="text" name="firstname" id="firstname" value=<?php echo $first_name; ?>><br><br>

        <label for="lname">Last Name </label><br>
        <input type="text" name="lastname" id="firstname" value=<?php echo $last_name; ?>><br><br>

        <label for="email">Email </label><br>
        <input type="email" name="email" id="email" value=<?php echo $email; ?>><br><br>

        <label for="password">Password </label><br>
        <input type="password" name="password" id="password" value=<?php echo $password; ?>><br><br>

        <label for="gender">Gender </label><br>
        <input type="radio" name="gender" id="gender" value="female"
         <?php if ($gender=='female') {echo "checked";}?>>Female
        <input type="radio" name="gender" id="gender" value="male" 
         <?php if ($gender=='male') {echo "checked";}?>>Male<br><br>

        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>
   <?php }else{
    header('Location:view.php');
   }    
}
?>

