<?php
	session_start();
?>

<?php
	require_once 'C:/xampp/htdocs/zapocet/databaze_login.php';
?>

   <form action="pridej_action.php" method="post">
  Název knihy: <input type="text" name="nazev"> <br>
  Autror knihy:  <input type="text" name="autor">   <br>
  Cena knihy: <input type="text" name="cena">  <br>
    <input type="submit" name="odesli" value="Přidej">
    
   
   </form>
