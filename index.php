<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once 'account.php';
        
        $account1 = new Account('sv-255', '2014-10-04');
        $account1->deposit(8000);
        $account1->withdraw(1200);
        $account2 = new Account('sv-256', '2014-10-05');
        $account2->deposit(9000);
        $account3 = new Account('sv-257', '2014-10-06');
        $account3->deposit(5000);
        
        $accountArry = array();
        
        $accountArry [] = $account1;
        
        $accountArry [] = $account2;
        
        $accountArry [] = $account3;
        
        foreach ($accountArry as $an_account) 
        {
            
            echo $an_account->get_account_number(). ' '.$an_account->get_opening_date(). ' '.$an_account->get_balance().'<br/>' ;
            
        }
        
        
      
        ?>
    </body>
</html>
