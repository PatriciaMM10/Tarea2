<?php
  $fuel = $_POST['gasolina'];  
  echo "<h1> Uso de la Estructura de Control While en PHP y HTML </h1> <br>";
  while ($fuel > 5)  {
        echo "Hay suficiente gasolina $fuel, sigue manejando <br>";
        $fuel = $fuel - 1;
    }  
     echo "<br />";  
     print("Cantidad final de combustible: $fuel <br>");
?>
