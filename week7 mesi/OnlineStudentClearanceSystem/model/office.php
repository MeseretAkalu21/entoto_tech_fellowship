<?php

//capture and show me code
include_once '../controller/dbcontroller.php';
if(isset($_POST['username']) and isset($_POST['password'])){
    //to show what is filled for the user like js alert msg
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $db=new dbcontroller();
    $result=$db->officerlogin($username, $password);
    
    if($result=='1'){
      $Allusername=$db->getofficeid($_POST['username']);
      session_start();
       $id=$Allusername['id'];
    $_SESSION['id']=$id;
                 
         
        
        header("Location: /OnlineStudentClearanceSystem/MDB-Free_4.8.2/officehomepage.php");
        
    }else{
        echo 'incorrect username and password';
    }
    
    
//    echo $user;
//    echo $pass;
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

