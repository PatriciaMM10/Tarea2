<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="iso-8859-1">
 <body>
   <?php  
   echo "<h1> Uso de Funciones de Cadenas: lcfirst y strtoupper con PHP y HTML </h1>";
      $Hola = 'Hola Mundo';
      $Hola = lcfirst($Hola);             // helloWorld
      echo "$Hola <br>"; 
      $Hola = '!Hola Mundo!';
      $Hola = lcfirst($Hola);  
      echo "$Hola <br>";  
            // hELLO WORLD!
      $Hola = lcfirst(strtoupper($Hola)); // hELLO WORLD!
      echo "$Hola";

      ?>
 </body>
</html>  

