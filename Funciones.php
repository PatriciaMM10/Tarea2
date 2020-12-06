
<?php
echo "<h1> Uso de una Función en PHP y HTML </h1> <br>"; 
function EjemploCompleto ($valor, &$refe, $predet = "dos")
{
$refe = "Juntos, ".$valor. " para ".$predet;
return $predet;
}

$bebida = "Café";
$cuantos = EjemploCompleto($bebida, $cad);
echo $cad."\n";     //Escribe “Juntos, café para dos”
echo "<br />";
echo strtoupper($cuantos."\n"); //Escribe “dos”
echo "<br />";
       $cad = "";
$cuantos = EjemploCompleto("Té", $cad, "tres");
echo "<br />";
echo $cad."\n"; //Escribe “Juntos, té para tres”
echo "<br />";
echo strtoupper($cuantos."\n"); //Escribe “tres”
?>