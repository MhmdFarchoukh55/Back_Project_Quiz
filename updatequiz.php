<?php
include "./connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
        $u1 = trim($_POST['wantupadequiz']);
        $u2 = trim($_POST['upadequiz']);


        $UpdateQuery = "UPDATE quize SET quizeName = ? WHERE quizeName = ?";
        $stmt3 = mysqli_prepare($sql_conn, $UpdateQuery);
        mysqli_stmt_bind_param($stmt3, "ss", $u1, $u2);

        mysqli_stmt_execute($stmt3);

        if (mysqli_stmt_affected_rows($stmt3) > 0) {
            echo "Question name updated successfully!";
        } else {
            echo "No question updated. Maybe the old name does not exist exactly.";
        }
        $v1 = trim($_POST['wantupadequiz_time']);
        $v2 = trim($_POST['upadequiz_time']);


        $UpdateQuery = "UPDATE quize SET duration = ? WHERE duration = ?";
        $stmt4 = mysqli_prepare($sql_conn, $UpdateQuery);
        mysqli_stmt_bind_param($stmt4, "ss", $v1, $v2);

        mysqli_stmt_execute($stmt4);

        if (mysqli_stmt_affected_rows($stmt4) > 0) {
            echo "Question name updated successfully!";
        } else {
            echo "No question updated. Maybe the old name does not exist exactly.";
        }
    
}

mysqli_close($sql_conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>update quiz</h1>
    <form method="POST">
    <h3>name of the quiz</h3>
    <input type="text" placeholder="newQuiz" name="wantupadequiz"><br>
    <input type="text" placeholder="oldQuiz_time" name="upadequiz"><br>
    <h3>duration of the quiz</h3>
    <input type="text" placeholder="newQuiz" name="wantupadequiz_time"><br>
    <input type="text" placeholder="oldQuiz_time" name="upadequiz_time"><br>
    
    <input type="submit" value="Update">
    <h3>go back home</h3>
    <a href="homeAdmin.php">click here!!</a>

</body>
</html>