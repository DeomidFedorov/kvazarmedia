<?php
//Получим данные из формы

  $name = $_POST["name"];
  $phone = $_POST["phone"];

// OBRABOTKA DANNUH

  $name = thmlspecialchars($name);
  $phone = htmlspecialchars($phone);

  $name = urldecode($name);
  $phone = urldecode($phone);
?>
