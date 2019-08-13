<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once'dbblogin.php';
if(isset($_POST['user']) and isset($_POST['newpass'])){

    $user=$_POST['user'];
    $pass=$_POST['newpass'];
    $db=new dbblogin                                                                                                                                                                                                                                                                                                                                 ();
    $result=$db->userlogin($user, $newpass);
    if($result=='1')
    {
        header("location: /OnlineStudentClearanceSystem/MDB-Free_4.8.2/Home.html");
        
    }
    else{
        echo 'incorrect username or password';
        
    }    
    
}
