<?php
include_once 'dblogin.php';
if(isset($_POST['user']) and isset($_POST['pass'])){

    $user =$_POST['user'];
    $pass = $_POST['pass'];
    $db = new dblogin();
    $result = $db->userlogin($user, $pass);
    if($result=='1')
    {
        echo 'successfuly logged in';
    }
    else{
        echo 'incorrect username or password';
        
    }    
    
}

