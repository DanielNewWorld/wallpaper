<?php
  $host = 'localhost';
  $user = "root";
  $password = "manager";
  $db='wallpaper';
  $arr=array();

// Производим попытку подключения к серверу MySQL:
$dbh = mysql_connect($host, $user, $password) or die("Не могу соединиться с MySQL:".mysql_error());

// Выбираем базу данных:
mysql_select_db($db) or die("Не могу подключиться к базе.");

//Получаем данные от клиента
if ($_GET['dbLogin']=="") 
  $result = mysql_query("UPDATE `wallpaper`.`photo` SET `type` = 'null' WHERE `photo`.`id` = 10;");

if ($_GET['dbLogin']=="lll") 
  $result = mysql_query("UPDATE `wallpaper`.`photo` SET `type` = 'ooo' WHERE `photo`.`id` = 10;");

// Выводим заголовок таблицы:
$line="SELECT * FROM `photo`";
$result = mysql_query($line);
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
  $dbID = $row[0];
  $dbFile = $row[1];
  $dbType = $row[2];
  
  $arr[] = array('dbID' => $dbID,'dbFile' => $dbFile,'dbType' => $dbType);
}

echo json_encode($arr);

?>

