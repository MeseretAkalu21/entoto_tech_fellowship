<?php
 include_once '../controller/dbcontroller.php';

if(isset($_POST['user']) && isset($_POST['newpass'])){
  $user=$_POST['user']; 
 
   $newpass=$_POST['newpass'];
   echo $user;
  
   $db=new dbcontroller();
   $result=$db->update($user,$newpass);
   
       if($result =='1'){
       //echo 'sucessfuly login';
       header("Location: /OnlineStudentClearanceSystem/viewer/login.php");
     // window.open("../MDB-Free_4.8.2/index.php");
       }
       else {
//         
           
 header("Location: /OnlineStudentClearanceSystem/MDB-Free_4.8.2/invalid.html");

                  
       }
    

}


