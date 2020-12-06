<?php 

  $balance = $_POST['bank_balance'];  
 
  echo "<h1> Uso de la Estructura de Control SI en PHP y HTML </h1><br>"; 
  if ($balance < 100)  
  {    
    $money  = 1000;    
    $balance += $money;    
    print ("El balance supera los $100.00:  $money y esto es el balance: $balance 
    <br />");  
    }  
    print("El balance es menor a $100");
    ?>