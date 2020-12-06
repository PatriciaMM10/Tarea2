<?php  
  $bank_balance = $_POST['bank_balance'];  
  $savings = 0;    
if ($bank_balance < 100)
  {  	
      $money         = 1000;    
      $bank_balance += $money;   
      print("DENTRO DEL IF: Esto es el dinero: $money y esto es el balance: $bank_balance <br />"); 
       }  
elseif ($bank_balance > 200)  
{  	
    $savings      += 100;    
    $bank_balance -= 100;    
    print("DENTRO DEL  ELSE IF: Esto es el ahorro: $savings y esto es el balance: $bank_balance <br />");  
    }  
else 
{  	
    $savings      += 50;    
    $bank_balance -= 50;    
    print("DENTRO DEL  ELSE: Esto es el ahorro: $savings y esto es el balance: $bank_balance <br />"); 
 }
 ?>