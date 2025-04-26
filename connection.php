<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db="quiz_project";

$sql_conn=new mysqli($servername,$username,$password,$db);

// if ($sql_conn->connect_error) {
//     die("Connection failed: " . $sql_conn->connect_error);
// } else {
//     echo "Connected successfully!<br>";
// }
// ?>