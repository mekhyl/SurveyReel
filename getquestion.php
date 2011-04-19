<?php

  extract($_GET);

  // FIXME: Bogus values.
  $qnum = $q;
  $qtext = "What do you want?";

  $response = "qnum=" . urlencode($qnum) . "&qtext=" . urlencode(trim($qtext));
  echo $response;

?>
