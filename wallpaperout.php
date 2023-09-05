<?php
  $host = 'localhost';
  $user = "root";
  $password = "manager";
  $db='wallpaper';

$data = json_decode($_POST['jsonData']);

$dbh = mysql_connect($host, $user, $password) or die("Не могу соединиться с MySQL:".mysql_error());

// Выбираем базу данных:
mysql_select_db($db) or die("Не могу подключиться к базе.");

$result = mysql_query("UPDATE `wallpaper`.`photo` SET `type` = 'okey' WHERE `photo`.`id` = 10;");

?>
