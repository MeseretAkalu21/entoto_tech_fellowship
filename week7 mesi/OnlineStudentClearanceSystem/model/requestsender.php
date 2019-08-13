<?php

//capture and show me code
include_once '../controller/dblogin.php';
if(isset($_POST['select']) and isset($_POST['date']) and isset($_POST['reason'])){
    //to show what is filled for the user like js alert msg
    $select=$_POST['select'];
    $date=$_POST['date'];
    $reason=$_POST['reason'];
    $db=new dblogin();
    $result=$db->requestsender($_POST['select'], $_POST['date'], $_POST['reason']);
    
    if($result=='1'){
        echo 'ur request send succesfully';
        header("Location: /Student_online_Clerance_System/MDB-Free_4.8.2/homepage.php");
        
    }else{
        echo 'your request doesnt send';
    }
    
    
//    echo $user;
//    echo $pass;
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>

