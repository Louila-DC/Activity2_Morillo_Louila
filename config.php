<?php

  $conn = mysqli_connect("localhost", "root", "", "ACT2_MORILLO_LOUILA");

  function h($str){
    return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
  }

  session_start();
?>