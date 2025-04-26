<?php 
include "connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password=$_POST['password'];
    $email=$_POST['email'];
    if ( empty(trim($password))||empty(trim($email))) { 
        echo "error !";
    }else{
        $query2= "SELECT Email,Password FROM users WHERE Email=?";

        $stm2=mysqli_prepare($sql_conn,$query2);
        
        mysqli_stmt_bind_param($stm2,"s",$email);
        
        $result=mysqli_stmt_execute($stm2);
        
        $user=mysqli_fetch_assoc(mysqli_stmt_get_result($stm2) );
        
        if ($user  && $password == $user['Password'])  {
            header ("Location: home.php");//kermel rou7 3al home page 
        }else{
            echo " ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    <form method="POST">
        <input type="email" placeholder="email" name="email" required><br>
        <input type="password" placeholder="password" name="password" required><br>
        <input type="submit" value="login">

    </form>
</body>
</html>