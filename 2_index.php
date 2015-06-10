    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  <style type="text/css">
td    {width:30px;height: 20px;}
</style>
  
  
  
  </head>
  <body>

      <h1>
       Tabulka
      </h1>
  
        <form action="index.php" method="post">
        Řádky: <select name="radky">
                <option value="1" selected="selected">1</option>
               <option value="2" >2</option>
               <option value="3" >3</option>
               <option value="4" >4</option>
               <option value="5" >5</option>
               <option value="6" >6</option>
               <option value="7" >7</option>
               <option value="8" >8</option>
               <option value="9" >9</option>
               <option value="10" >10</option>
                </select>
      Sloupce: <select name="sloupce">
                <option value="1" selected="selected">1</option>
               <option value="2" >2</option>
               <option value="3" >3</option>
               <option value="4" >4</option>
               <option value="5" >5</option>
               <option value="6" >6</option>
               <option value="7" >7</option>
               <option value="8" >8</option>
               <option value="9" >9</option>
               <option value="10" >10</option>
                </select>
        <input type="submit" name="odesli" value="Vykresli">
        
                  
                   
                  
        
        </form>
            
     <?php
            if(isset($_POST["odesli"])) {
             echo'<table border="1">';
              for($i=0;$i<$_POST["radky"];$i++){
               echo"<tr>" ;
                 for($j=0;$j<$_POST["sloupce"];$j++){
                   echo"<td>1</td>";
              
              
              
                  }
               echo"</tr>"   ;
              }        
            
            
            
            
           echo"</table>" ;
            }
      
      
       unset($_POST["odesli"]);
     ?>
  </body>
</html>

