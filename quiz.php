<?php
if (isset($_POST['submit'])) {
  $answer1 = $_POST["answer1"];
  $answer2 = $_POST["answer2"];
  $answer3 = $_POST["answer3"];
  $answer4 = $_POST["answer4"];
  $answer5 = $_POST["answer5"];
  $total = 0;

  if($answer1 == "Wilt Chamberlain"){
    $total++;
  }
  if($answer2 == "Golden State Warriors"){
    $total++;
  }
  if($answer3 == "The Heat"){
    $total++;
  }
  if($answer4 == "Boston Celtics"){
    $total++;
  }
  if($answer5 == "Kareem Abdul-Jabbar"){
    $total++;
  }
  echo "<div id='results'>$total / 5 correct</div>";
  $total = $total * 20;
  echo "<p> you recieved a $total% on your quiz</p><br>";
  echo "<p>Question 1: What player scored the most points in one game?</p>
        <p>You answered: $answer1 </p>
        <p>Correct answer: Wilt Chamberlain </p><br>";
  echo "<p>Question 2: Which team won the 2018 NBA Championship? </p>
        <p>You answered: $answer2 </p>
        <p>Correct answer: Golden State Warriors </p><br>";
  echo "<p>Question 3: What is the mascot of the NBA team located in Miami? </p>
        <p>You answered: $answer3 </p>
        <p>Correct answer: The Heat</p><br>";
  echo "<p>Question 3: What NBA team has won the most Championships? </p>
        <p>You answered: $answer4 </p>
        <p>Correct answer: Boston Celtics</p><br>";
  echo "<p>Question 3: Which player has won the most NBA MVP awards?</p>
        <p>You answered: $answer5 </p>
        <p>Correct answer: Kareem Abdul-Jabbar</p><br>";
}
?>
