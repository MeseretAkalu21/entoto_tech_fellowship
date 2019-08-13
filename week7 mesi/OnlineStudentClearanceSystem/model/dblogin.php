<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../controller/dbcontroller.php';

if(isset($_POST['username']) and isset($_POST['password'])){
    
$username=$_POST['username'];
$password=$_POST['password'];
$db=new dbcontroller();
$result=$db->userlogin($username,$password);
if($result=='1'){

//             $user=$db->getprevelage($_POST['user']);
//              session_start();
//              $prevelage=$user['prevelage'];
//               $_SESSION['prevelage']=$prevelage;


    echo 'Successfully login';
    header("Location:/OnlineStudentClearanceSystem/MDB-Free_4.8.2/Home.html");
    
    
}else{
   echo 'Incorrect username or password';
} 
}
    
    
    
    


