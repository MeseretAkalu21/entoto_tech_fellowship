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
       
        <h1>Home Page</h1>
        <?php
        
        session_start();
        $prevelage=$_SESSION['prevelage'];
        
//        echo $prevelage;
       if($prevelage=='Admin'){
           ?>
        
        <button>Admin</button>
        
        <?php } else{ ?>
         <button>Student</button>
          <button>Login</button>
          <?php
//        <!--echo $prevelage;-->
        }
        
         ?> 
    </body>
</html>
        
        
    
