<?php

  extract($_GET);

  mysql_connect("localhost", "root", "gobimanchurian");
  mysql_select_db("surveyreel");

  $url_part = mysql_real_escape_string($survey_url_part);

  $result = mysql_query("SELECT * 
                         FROM survey 
                         WHERE url_part = '$url_part'");

  $row = mysql_fetch_array($result);
  $id = $row["id"];
  $title = $row["title"];
  $description = $row["description"];
  $user_id = 1;

  $response = "id=" . urlencode($id) 
              . "&user_id=" . urlencode($user_id)
              . "&title=" . urlencode(trim($title))
              . "&description=" . urlencode(trim($description));
  echo $response;

?>
