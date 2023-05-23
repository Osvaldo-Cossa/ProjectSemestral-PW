<?php
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root","", "grocery");
$query ="insert into feedback(quality_score, feedback)values($q_score, '$feedback_txt')";
$result = mysqli_query($conn, $query);
if($result)
  echo 'Obrigado pelo seu comentário. Vamos apreciar!';
else
die("Algo terrível aconteceu. Por favor, tente novamente. ");
?>