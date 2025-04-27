<?php
include "./connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
    $w1 = trim($_POST['deleteQuiz']);
    

    $UpdateQuery = "DELETE FROM quize WHERE quizeName=?";
    $stmt3 = mysqli_prepare($sql_conn, $UpdateQuery);
    mysqli_stmt_bind_param($stmt3, "s", $w1);

    mysqli_stmt_execute($stmt3);

    if (mysqli_stmt_affected_rows($stmt3) > 0) {
        echo "Question name updated successfully!";
    } else {
        echo "No question updated. Maybe the old name does not exist exactly.";
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
    <h1>delete quiz</h1>
    <form method="POST">
    <input type="text" placeholder="name_quiz" name="deleteQuiz">
    <input type="submit" value="submit">
    </form>

    <h3>go back home</h3>
    <a href="homeAdmin.php">click here!!</a>
</body>
</html>