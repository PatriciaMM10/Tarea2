<?php
echo "<h1> Uso de la Estructura de Control SI Else en PHP y HTML </h1> <br>"; 
  $balance = $_POST['bank_balance'];
  $savings = 0;  
    if ($balance < 100)  {   
       $money         = 1000;    
       $balance += $money;    
       print(" Esto es el dinero total del balance: $money y esto es el balance: $balance");
       echo "<br />";
    }  
    else  
    {    
        $savings   += 50;    
        $balance -= 50;   
        print("Estos son los ahorros: $savings y esto es el balance: $balance");
        echo "<br />";
    } 
    echo "<br />";
    print("Que tengas buen día");
?>