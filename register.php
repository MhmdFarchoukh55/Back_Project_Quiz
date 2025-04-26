<?php
include "./connection.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form>
        <input type="text" placeholder="Last_name" name="Last_name" required><br>
        <input type="text" placeholder="First_name" name="First_name" required><br>
        <input type="password" placeholder="password" name="password" required><br>
        <input type="email" placeholder="email" name="email" required><br>
        <input type="submit"  value="Register">

    </form>
</body>
</html>