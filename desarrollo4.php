<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ejercicio 4</title>
    </head>
    <body>
        <form method="POST">

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        
        <form method='POST'>
        
        Ingrese un numero : <input name = 'numero' type='number' min='1' max ='9999' > 
        
        <br> <input type='submit' value='Envie el numero'/>
        
         </form>
        
        <?php 
          
          
        if(isset($_REQUEST['numero'])){
    
        
        $a =  $_POST['numero'];
        
        
      
        
       echo "<br>el numero al reves es ".strrev($a);
        }
        
        ?>
    </body>
</html>