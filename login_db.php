<?php


$link = mysql_connect('localhost', 'Jirka', 'heslo_veslo');
  mysql_set_charset("utf8",$link);
if (!$link||!mysql_select_db("Jirka")) {
    die('Could not connect: ' . mysql_error());
}
//mysql_query("SET CHARACTER SET utf8");

//echo 'Connected successfully';
//mysql_close($link);



?>
