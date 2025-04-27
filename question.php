<?php
include "./connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $questionName=$_POST['questionName'];
    $grade=$_POST['grade'];
    $quizname=$_POST['quizname'];
    if (empty(trim($grade))||empty(trim($quizname)) || empty(trim($questionName)))  {
        echo "error !";
    }else{
        $findQuizQuery = "SELECT Quiza_id FROM Quize WHERE quizeName = ?";
        $findStmt = mysqli_prepare($sql_conn, $findQuizQuery);
        mysqli_stmt_bind_param($findStmt, "s", $quizname);
        mysqli_stmt_execute($findStmt);
        $result = mysqli_stmt_get_result($findStmt);
        $row = mysqli_fetch_assoc($result);
        $quizId = $row['Quiza_id'];


        $query1 = "INSERT INTO question (question_grade, question_name, quize_id) VALUES (? ,? ,?)";
        $stm=mysqli_prepare($sql_conn,$query1);
        
        mysqli_stmt_bind_param($stm,"dsi",$grade,$questionName,$quizId);
        
        mysqli_stmt_execute($stm);
    }
}
$SelectQuery="SELECT question_name FROM question ";

$stmt2=mysqli_prepare($sql_conn,$SelectQuery);
        
mysqli_stmt_execute($stmt2);

$result2 = mysqli_stmt_get_result($stmt2);
echo "<h1> question </h1>";
while ($user_question = mysqli_fetch_assoc($result2)) {
    echo $user_question['question_name'] . "<br>";
};



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Question</h1>
    <form method="POST">
        <input type="text" placeholder="questionName" name="questionName"><br>
        <input type="number" placeholder="grade" name="grade"><br>
        <p>choose one of these coures : maths -- physique -- networking</p>
        <input type="text" placeholder="quizname" name="quizname"><br>


        <input type="submit" value="questionName">
        <p>available quizes</p>
        <a href="quiz.php">click here!!</a>
        <p>update question</p>
        <a href="updatequestion.php">click here!!</a>

    </form>
</body>
</html>