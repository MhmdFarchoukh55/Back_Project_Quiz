<?php
include "./connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
        $u1 = trim($_POST['wantupadequestion']);
        $u2 = trim($_POST['upadequestion']);


        $UpdateQuery = "UPDATE question SET question_grade = ? WHERE question_grade = ?";
        $stmt3 = mysqli_prepare($sql_conn, $UpdateQuery);
        mysqli_stmt_bind_param($stmt3, "ss", $u1, $u2);

        mysqli_stmt_execute($stmt3);

        if (mysqli_stmt_affected_rows($stmt3) > 0) {
            echo "Question name updated successfully!";
        } else {
            echo "No question updated. Maybe the old name does not exist exactly.";
        }
        $v1 = trim($_POST['wantupadequestion_name']);
        $v2 = trim($_POST['upadequestion_name']);


        $UpdateQuery = "UPDATE question SET question_Name = ? WHERE question_Name = ?";
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
    <h1>update question</h1>
    <form method="POST">
        <h3>question name</h3>
    <input type="text" placeholder="new_duration" name="wantupadequestion"><br>
    <input type="text" placeholder="old_duration" name="upadequestion"><br>
    <h3>question time</h3>

    <input type="text" placeholder="new_name" name="wantupadequestion_name" required><br>
    <input type="text" placeholder="old_name" name="upadequestion_name" required><br><br>
    <input type="submit" value="Update">
    </form>
</body>
</html>