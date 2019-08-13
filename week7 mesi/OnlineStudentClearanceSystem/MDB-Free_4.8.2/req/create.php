<?php


include_once 'dbblogin.php';
if( isset($_POST['lastdate'])and isset($_POST['type'])and isset($_POST['reason']) ){
    
    
   

  $lastdate = $_POST['lastdate'];
 $type = $_POST['type'];
  $reason = $_POST['reason'];


  
//  
   $db=new dbblogin();
   $result=$db->request($lastdate,$type,$reason);
   if($result =='1'){
       echo 'sucessfuly insert';
       }  else {
           echo 'error';
       }
//       
       
} 
 