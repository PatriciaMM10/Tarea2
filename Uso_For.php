<?php 
echo "<h1> Uso de la Estructura de Control For en PHP y HTML </h1> <br>"; 
$num_mult = $_POST['num'];
echo ("Tabla de multiplicar $num_mult"); 
echo "<br>";
echo "<br>";
For ($count=1 ; $count<=12 ; ++$count)
       echo "$count multiplicado por $num_mult = " . $count * $num_mult . "<br>";
?>
