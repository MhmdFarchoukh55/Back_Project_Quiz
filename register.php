<?php
include "./connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Last_name=$_POST['Last_name'];
    $First_name=$_POST['First_name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    if ( empty(trim($Last_name))||empty(trim($First_name))||empty(trim($password))||empty(trim($email))  ){
        echo "error !";
    }else{
        $query1 = "INSERT INTO users (Lname, Fname, Password, Email) VALUES (?, ?, ?, ?)";
        $stm=mysqli_prepare($sql_conn,$query1);
        // mysqli_prepare 3m 7adir el data take 2 argm 1-connection 2- query
        mysqli_stmt_bind_param($stm,"ssss",$Last_name,$First_name,$password,$email);
        //mysqli_stmt_bind_param bte5od 3 para 1-el data yali 7adarta 2-the type of that varbiable 3-variable
        mysqli_stmt_execute($stm);
        //mysqli_stmt_execute kermel keba bel ddatabase
    }
}
header("Location: login.php");

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
    <form method="POST" >
        <input type="text" placeholder="Last_name" name="Last_name" required><br>
        <input type="text" placeholder="First_name" name="First_name" required><br>
        <input type="password" placeholder="password" name="password" required><br>
        <input type="email" placeholder="email" name="email" required><br>
        <input type="submit"  value="Register">

    </form>
</body>
</html>