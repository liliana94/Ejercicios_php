<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
    </head>
    <body>
        <form method="POST">
        
        <h2>Por Favor Ingrese Las Coeficientes </h2> <br>
        <label> variable a:  <input type='text' name='a' ></label><br>
        <label> variable b:  <input type='text' name='b' ></label><br>
        <label> variable c:  <input type='text' name='c' ></label><br>
        <input type='submit' name='Enviar!'>
                </form>
        
        <?php
        
        
        
        $b1 = $_POST['a'] * 2;
        
        $a1 = $_POST['b'];
        $a2 = $_POST['c'];
        $b2 = ($a1 * $a2);
        $b3 = 4 * $b2;
      $y =  sqrt($b3);
      
    
      
        $b4= $b1 - $y;
        $b5 = $_POST['b'] + $b4;
        $b6 = $b5 / (2*$a1);
        echo "<br>";
        echo "El Resultado de la ecuacion es: ". $b6;
        
        ?>
    </body>
</html>