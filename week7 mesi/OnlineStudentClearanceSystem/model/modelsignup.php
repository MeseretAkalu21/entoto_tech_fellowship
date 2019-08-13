<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../controller/dbcontroller.php';

if(isset($_POST['full_name'])and isset($_POST['phone_number'])and isset($_POST['program'])and 
        isset($_POST['username'])and isset($_POST['password'])and isset($_POST['signup_date'])){
   
$full_name=$_POST['full_name'];
$phone_number=$_POST['phone_number'];
$program=$_POST['program'];
$username=$_POST['username'];
$password=$_POST['password'];
$signup_date=$_POST['signup_date'];




$db=new dbcontroller();
$result=$db->signupp($full_name,$phone_number,$program,$username,$password,$signup_date);
       
if($result=='1'){

     
    echo 'Successfully signup';
   //header("Location:../viewer/login.php");
    
    
}else{
   echo 'Please try again';
} 
}
    
?>