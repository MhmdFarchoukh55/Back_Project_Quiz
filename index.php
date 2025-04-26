<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="quiz_project";

$sql_conn=new mysqli($servername,$username,$password,$db);

if($sql_conn ){
    echo "connected sudd";
}else{
    die ("connfailed" );
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
    
</body>
</html>