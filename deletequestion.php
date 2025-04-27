<?php
include "./connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
    $w1 = trim($_POST['deletequestion']);
    

    $UpdateQuery = "DELETE FROM question WHERE question_Name=?";
    $stmt3 = mysqli_prepare($sql_conn, $UpdateQuery);
    mysqli_stmt_bind_param($stmt3, "s", $w1);

    mysqli_stmt_execute($stmt3);

    if (mysqli_stmt_affected_rows($stmt3) > 0) {
        echo "Question name delete successfully!";
    } else {
        echo "No question delete. Maybe the old name does not exist exactly.";
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
    <h1>delete question</h1>
    <form method="POST">
    <input type="text" placeholder="name_question" name="deletequestion">
    <input type="submit" value="submit">
    </form>

    <h3>go back home</h3>
    <a href="homeAdmin.php">click here!!</a>
</body>
</html>