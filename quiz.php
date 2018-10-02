<?php
  $answer1 = $_post["answer1"];
  $answer2 = $_post["answer2"];
  $answer3 = $_post["answer3"];
  $answer4 = $_post["answer4"];
  $answer5 = $_post["answer5"];
  $total = 0;

  if($answer1 == "Wilt Chamberlain"){
    $total++;
  }
  if($answer2 == "Golden State Warriors"){
    $total++;
  }
  if($answer3 == "Wilt Chamberlain"){
    $total++;
  }
  if($answer4 == "Wilt Chamberlain"){
    $total++;
  }
  if($answer5 == "Wilt Chamberlain"){
    $total++;
  }
  <input type="submit" value="Submit Quiz" />
?>
