<html> 
<body> 
<h1> Uso de la Estructura de Control SI Varios en PHP y HTML </h1> 
<?php  
$page = $_POST['Navegacion'];  
if     ($page == "Inicio")  echo "Tu seleccionaste Inicio";  
elseif ($page == "Acerca de") echo "Tu seleccionaste Acerca de";  
elseif ($page == "Nuevo")  echo "Tu seleccionaste Nuevo";  
elseif ($page == "Acceso") echo "Tu seleccionaste Acceso";  
elseif ($page == "Liga") echo "Tu seleccionaste Liga";  
else                      echo "Selecciona una de las anteriores";
?>
</body>
</html>
