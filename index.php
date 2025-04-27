<?php
include "./connection.php";

$userTable="CREATE TABLE Users(
    User_id INT AUTO_INCREMENT  PRIMARY KEY,
    Lname VARCHAR(255) NOT NULL,
    Fname VARCHAR(255) NOT NULL,
    Email VARCHAR(255),
    Password VARCHAR(255) NOT NULL
)";
// $sql_conn->query($userTable); //kermel kebon bel phpmyadmin

$quizTable= "CREATE TABLE Quize(
    Quiza_id INT AUTO_INCREMENT  PRIMARY KEY,
    duration float Not NULL,
    quizeName VARCHAR(255) NOT NULL 
)";
// $sql_conn->query($quizTable);

$scoreTable="CREATE TABLE Score(
    score_id INT AUTO_INCREMENT  PRIMARY KEY,
    Note FLOAT  NOT NULL,
    Quiza_id INT NOT NULL,
    User_id INT NOT NULL,
    FOREIGN  KEY (User_id) REFERENCES Users(User_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN  KEY (Quiza_id) REFERENCES Quize(Quiza_id) ON DELETE CASCADE ON UPDATE CASCADE 

)";
// $sql_conn->query($scoreTable);
$questionTable="CREATE TABLE Question(
    question_id INT AUTO_INCREMENT PRIMARY KEY,
    question_grade FLOAT  NOT NULL
     
)";
// $sql_conn->query($questionTable);
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