<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ejercicio 9</title>
    </head>
    <body>
        
    <form method="POST">

    <div class="btn_more">
    <p><a href="#aboutus">Resultado <span>&raquo;</span></a></p>
    </div>

      <?php
	   if (isset($_POST['txtCosto'])){
        // put your code here
      $c=$_POST['txtCosto'];
	$pt=0;
	$ini=$c;
	$suma=$c+300;
	$por=$c*0.05;

	$pt=$suma+$por;
	echo "El precio inicial de la Laptop es: ".$ini;
	echo "<br>El valor a pagar con los impuestos incluidos es: ".$suma;
	echo "<br>El valor a pagar a los soldados es: ".$por;
	echo "<br>El valor final de la Laptop es: ".$pt;
	
	   }
        ?>
     
</body>
</html>