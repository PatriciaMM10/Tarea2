
<?php	
echo "<h1> Uso de arreglos en PHP con HTML </h1>";
$productos = array(	
	
	'Bolígrafo Azul' => array( 'Marca' => "Bic", 'Costo'  => "$0.75", 	'Código'  => "552BIC12" ),
	'Pegamento' => array( 'Marca' => "Pritt", 'Costo'  => "$0.75", 'Código'  => "567PRI13" )
);
 
foreach($productos as $producto => $detalles)

{
	echo "<h3> $producto </h3>";
 
    foreach($detalles as $indice => $valor)
	{
		echo "<p> $indice:$valor </p>";
	}
	echo "<br />";  
}
 
?>
