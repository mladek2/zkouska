<?php
	session_start();
?>

<?php
	require_once 'C:/xampp/htdocs/zapocet/databaze_login.php';
?>


<?php
	$dotaz="INSERT INTO `jirka`.`zkouska` (`id`, `nazev`, `autor`, `cena`) 
  VALUES (NULL, '".$_POST["nazev"]."', '".$_POST["autor"]."', '".$_POST["cena"]."')";
  
  $vysledek = mysql_query($dotaz);

if (!$vysledek) {
    die('Invalid query: ' . mysql_error());
}  
  header("Location: index.php");
 //mail($_SESSION["email"],"registrace","Děkujeme za registraci v našem systému");
  exit(0);
?>
