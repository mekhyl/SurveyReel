<?php

  extract($_GET);

  mysql_connect("localhost", "root", "gobimanchurian");
  mysql_select_db("surveyreel");

  $result = mysql_query("SELECT text 
                         FROM question 
                         WHERE survey_id = $survey_id
                               AND seq = $seq");

  $row = mysql_fetch_array($result);
  $text = $row["text"];
  if ($text == null or trim($text) == "")
    $finished = true;
  else
    $finished = false;

  $response = "seq=" . urlencode($seq) 
              . "&text=" . urlencode(trim($text))
              . "&finished=" . urlencode($finished);
  echo $response;

?>
