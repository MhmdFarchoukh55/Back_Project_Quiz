<?php
include "./connection.php";

// $duration = '1h';
// $quizname = 'maths';

// $query3 = "INSERT INTO quize (duration,quizeName) VALUES (?,?)";
// $stm = mysqli_prepare($sql_conn, $query3);
// mysqli_stmt_bind_param($stm, 'ss', $duration, $quizname);
// mysqli_stmt_execute($stm);

// $duration2 = '1.5h';
// $quizname2 = 'physique';

// $query4 = "INSERT INTO quize (duration,quizeName) VALUES (?,?)";
// $stm2 = mysqli_prepare($sql_conn, $query4);
// mysqli_stmt_bind_param($stm2, 'ss', $duration2, $quizname2);
// mysqli_stmt_execute($stm2);

// $duration3 = '1.5h';
// $quizname3 = 'bio';

// $query5 = "INSERT INTO quize (duration,quizeName) VALUES (?,?)";
// $stm3 = mysqli_prepare($sql_conn, $query5);
// mysqli_stmt_bind_param($stm3, 'ss', $duration3, $quizname3);
// mysqli_stmt_execute($stm3);
// mysqli_stmt_close($stm3); 
//mysqli_close($sql_conn);

$SelectQuery="SELECT quizeName FROM quize ";

$stmt2=mysqli_prepare($sql_conn,$SelectQuery);
        
mysqli_stmt_execute($stmt2);

$result2 = mysqli_stmt_get_result($stmt2);
echo "<h1> Quizes </h1>";
while ($user_quiz = mysqli_fetch_assoc($result2)) {
    echo $user_quiz['quizeName'] . "<br>";
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
<h3>go back home</h3>
<a href="homeAdmin.php">click here!!</a>
</body>
</html>