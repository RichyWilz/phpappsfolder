<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="FBB197">
    <h1>Blood donation camp</h1>
    <div><h2>Registration form</h2></div>
    <form action="connect.php" method="POST">
        <label for="user">Name: </label><br>
        <input type="text" name="name" class="name" required><br><br>

        <label for="email">Email: </label><br>
        <input type="email" name="email" class="email" required><br><br>

        <label for="phone">Phone: </label><br>
        <input type="text" name="phone" class="phone" required><br><br>

        <label for="bgroup">Bloodgroup </label><br>
        <input type="text" name="bloodgroup" class="bloodgroup" required><br><br>

        <input type="submit" name="submit" class="submit">
    </form>
</body>
</html>