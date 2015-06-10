<?php


$link = mysql_connect('localhost', 'Jirka', '9302163332');
  mysql_set_charset("utf8",$link);
if (!$link||!mysql_select_db("Jirka")) {
    die('Could not connect: ' . mysql_error());
}
//mysql_query("SET CHARACTER SET utf8");

//echo 'Connected successfully';
//mysql_close($link);



?>
