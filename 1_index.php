<?php
	session_start();
?>

<?php
	require_once 'C:/xampp/htdocs/zapocet/databaze_login.php';
?>

  <form action="pridej.php" method="get">
  <input type="submit" name="odesli" value="přidej">
  
   </form>
   
   <?php
    $dotaz="SELECT * FROM `zkouska`";
     $vysledek = mysql_query($dotaz);

if (!$vysledek) {
    die('Invalid query: ' . mysql_error());
          }else{
          
          ?>
              <table border="1">
               
              
                <tr>
                <th>
                Název knihy
                </th>
                 <th>
                ID knihy
                </th>
                 <th>
                Autor
                </th>
                
                <th>
                cena
                </th>
                
                </tr>
              
          <?php
           
           
          while($radek = mysql_fetch_assoc($vysledek)):



      echo '<tr>';

      echo '<td>'.$radek["nazev"].'</td>';

      echo '<td>'.$radek["id"].'</td>';

      echo '<td>'.$radek["autor"].'</td>';

      echo '<td>'.$radek["cena"].',-Kč</td>';

      echo '</tr>';



endwhile;
        
          }//end else
    
   ?></table><?php 
    
   ?>
