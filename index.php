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

$userTable="CREATE TABLE Users(
    User_id INT AUTO_INCREMENT  PRIMARY KEY,
    Lname VARCHAR(255) NOT NULL,
    Fname VARCHAR(255) NOT NULL,
    Email VARCHAR(255) ,
    Password VARCHAR(255) NOT NULL
)";

if ($sql_conn->query($userTable) === TRUE) {
    echo "Table users created successfully ✨";
} else {
    echo "Error creating table: " . $sql_conn->error;
}

$sql_conn->close();
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