<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ejercicio 5</title>
    </head>
    <body>
        <form method="POST">



            <label for = "texfield">Nombre de Alumno: </label>
            <input type = "text"name="txtal"id="txtal" required="required" onKeypress="if (event.keyCode >45 && event.keyCode <57) event.returnValue = false;"><br><br>
            <label for = "texfield">Digite Edad</label>
            <input type = "text"name="txted"id="txted" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="2" minlength="1" required="required"><br><br>
            <label for = "texfield">Digite Altura</label>
            <input type = "text"name="txtalt"id="txtalt" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="4" required="required"><br><br>
            <button type="submit">Aceptar</button>
        </form>


       <?php
       
        if (isset($_POST['txtal'])){
        for ($i=0; $i<2; $i++ )       
        {
		     $alumno = $_POST["txtalt"];
       		 $edad = $_POST["txted"]; 
       		 $altura = $_POST["txtal"];         
        }
		echo $edad."<br>";
		echo $alumno."<br>";
		echo $altura."<br>"; 
	}
		
     
        ?>
    
   
        </p>
                    
			</div>
            
    
       
</div>
</body>
</html>