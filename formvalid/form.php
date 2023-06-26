<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$fullname = $email = $number = $gender = $comment = $age = "" ;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $number = test_input($_POST["number"]);
    $gender = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);
    $age = test_input($_POST["age"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?> 

<h2>Form validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="user">Fullname </label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="email">Email </label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="number">Number </label><br>
        <input type="text" name="number" id="phone"><br><br>

        <label for="age">Age </label><br>
        <input name="age" id="age"><br><br>

        Comment:
        <textarea cols="10" rows="15" name="comment" id="comment"></textarea><br><br>

        <label for="gender">Gender </label><br>
        <input type="radio" name="gender" id="gender">Female
        <input type="radio" name="gender" id="gender">Male<br><br>

        <input type="submit" name="submit" id="submit">
</form>
<?php 
echo "<h2> Your input: </h2>";
echo "<br>";
echo $fullname;
echo "<br>";
echo $email;
echo "<br>";
echo $number;
echo "<br>";
echo $age;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
 ?>

</body>
</html>

