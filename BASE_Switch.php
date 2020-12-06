<html> 
<body> 
<h1> Uso de la Estructura de Control CASE en PHP y HTML </h1> 
<?php  
$page = $_POST['Navegacion'];  
switch ($page): //ponemos dos puntos y quitamos la llave que abre    
case "Inicio":        echo "Seleccionaste Inicio <br/>";      
echo "Es lo mismo que Casa";  		
break;    
case "Acerca de":       
echo "Seleccionaste la opción Acerca de<br/>";  		
break;    
case "Nuevo":        
echo "Seleccionaste la opción Nuevo<br/>";  		
break;    
case "Acceso":       
echo "Seleccionaste la opción Acceso<br/>";  		
break;    
case "Liga":       
echo "Seleccionaste la opción Liga";      
break;    
default:	    
echo "Selección no reconocida";		
break;  
endswitch; //quitamos la llave que cierra y ponemos la palabra reservada
?>
</body>
</html>
