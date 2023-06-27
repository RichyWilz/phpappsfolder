<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// defining variables and setting empty
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(empty($_POST['name'])){
        $nameErr = "Valid name please";
    }else{
        $name = test_input($_POST['name']);
        if(!preg_match("/^[a-zA-Z-']*$/",$name)){
            $nameErr = "Only characters and spaces accepted";
        }

    }
    if(empty($_POST['email'])){
        $emailErr = "Valid email please";
    }else{
        $email = test_input($_POST['email']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr = "Wrong email address";
        }

    }
    if(empty($_POST['website'])){
        $website = "";
    }else{
        $website = test_input($_POST['website']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
            $websiteErr = "Enter valid website url";
        }
    }
    if(empty($_POST['comment'])){
        $comment = "";
    }else{
        $comment = test_input($_POST['comment']);
    }
    if(empty($_POST['gender'])){
        $gender = "";
    }else{
        $gender = test_input($_POST['gender']);
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<style>
    .error{color: #FF0000;}
</style>

<h2>Form validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="user">Fullname </label><br>
        <input type="text" name="name" id="name" required>
        <span class="error"><?php echo $nameErr ;?></span><br><br>

        <label for="email">Email </label><br>
        <input type="email" name="email" id="email" required>
        <span class="error"><?php echo $emailErr ;?></span><br><br>

        <label for="website">Website </label><br>
        <input type="website" name="website" id="website">
        <span class="error"><?php echo $websiteErr ;?></span><br><br>

        <label for="email">Comment </label><br>
        <textarea cols="10" rows="15" name="comment" id="comment"></textarea><br><br>

        <label for="gender">Gender </label><br>
        <input type="radio" name="gender" id="gender">Female
        <input type="radio" name="gender" id="gender">Male
        <span class="error"><?php echo $genderErr ;?></span><br><br>

        <input type="submit" name="submit" id="submit">
</form>
<?php 
echo "<h2> Your input: </h2>";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
 ?>
</body>
</html>
