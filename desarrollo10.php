<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ejercicio 10</title>
    </head>
    <body>
        <form method="POST">

<p><em>Fechas importantes en años no bisiestos a partir del 2014. </em><p/>
            
<label>Dia:</label>
 <input id="txtdia" required="required" name="txtdia" placeholder="Ingrese dia";  
 <br><br>
 <label>Mes:</label> 
 <input id="textomes" required="required"  name="textomes" placeholder="Ingrese mes": 
<label>Año :</label> 
<input id="textoaño" required="required" name="textoaño" placeholder="Ingrese año";
            
<input type="submit" name="enviar" id="enviar" value="Enviar"/>
</form>
        <div class="btn_more">
          <p><a href="#aboutus">Resultado <span>&raquo;</span></a></p>
        </div>
		<p>
        <?php
		 if (isset($_POST['textodia'])&&($_POST['textomes'])&&($_POST['textoaño'])){ 
    $d = $_POST['textodia'];
    $m = $_POST['textomes'];
    $a = $_POST['textoaño'];
	
		 if((($_POST['textodia']>0) && ($_POST['textodia']<=28))&&($_POST['textomes']==2))			    {
		 echo "la fecha ingresada es correcta <br> ".$d."/".$m. "/".$a;
	}
	else if((($_POST['textodia']>0) && ($_POST['textodia']<=30))&&($_POST['textomes']==4)||($_POST['textomes']==6)||($_POST['textomes']==9)||($_POST['textomes']==11))			    {
		 echo " la fecha ingresada es correcta <br> ".$d."/".$m. "/".$a;
	}
	else if((($_POST['textodia']>0) && ($_POST['textodia']<=30))&&($_POST['textomes']==4)||($_POST['textomes']==6)||($_POST['textomes']==9)||($_POST['textomes']==11))			    {
		 echo "la fecha ingresada es correcta<br> ".$d."/".$m. "/".$a;
	}
	else if((($_POST['textodia']>0) && ($_POST['textodia']<=31))&&($_POST['textomes']==1)||($_POST['textomes']==3)||($_POST['textomes']==5)||($_POST['textomes']==7)||($_POST['txtmes']==8)||($_POST['txtmes']==10)||($_POST['textomes']==12))			    {
		 echo "la fecha ingresada es correcta <br> ".$d."/".$m. "/".$a;
	}
	else echo "La fecha ingresada no es correcta!!";
}
    
    
?>
        </p>
                   
            
</body>
</html>