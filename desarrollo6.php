<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 6</title>
</head>
<body>
    
         <label><em>Ingrese algun numero</em></label> 
         <input id="numero" name="numero" placeholder='Ingrese un numero' onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="4" required="required"/><br><br>
         <button type="submit">Enviar</button>
         <br /><br />
        </form> <div class="btn_more">
          <p><a href="#aboutus">Resultado <span>&raquo;</span></a></p>
        </div>

       <?php
	   	    if (isset($_POST['numero'])){

$cadena = $_POST['numero'];


if (strrev($cadena) == $cadena)
{
	echo "El número es Capicua";
} else
{
	echo "El número no es Capicua";
}
			}
?>
              

</body>
</html>