<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
    <h2>Log In Page</h2>
    <?php if(isset($_GET['error'])){ ?>
        <p class="error" > <?php echo $_GET['error'];?></p> <?php }
    ?>
        <label for="name">User Name</label><br>
        <input type="text" name="name" placeholder= "name" id="name" ><br><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="password" id="password" ><br><br><br>

        <button type="submit">LogIn</button><br>
    </form>
</body>
</html>