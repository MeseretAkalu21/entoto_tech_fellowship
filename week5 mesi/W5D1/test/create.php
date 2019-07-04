<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'dblogin.php';
if(isset($_POST['full_name']) and isset($_POST['age']) and isset($_POST['phone'])and isset($_POST['Email'])){
$full_name=$_POST['full_name'];
$age =$_POST['age'];
$phone =$_POST['phone'];
$Email=$_POST['Email'];
$db=new dblogin();
$result=$db->signup($full_name,$age,$phone,$Email);

if($result=='1'){
    echo 'successfuly inserted';
}  else {
    
    echo 'error';

}
}