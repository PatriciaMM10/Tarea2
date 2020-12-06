<?php  
    $count = $_POST['gasolina'];  
    echo "<h1> Uso de la Estructura de Control Do While en PHP y HTML </h1>";
    do{    
        echo "$count veces 12 es " . $count * 12;    
        echo "<br>";  
    }while (++$count <= 12);  
        echo "<br />";  
        print("Cantidad final de combustible: $count");
?>