<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbcontroller
 *
 * @author selam
 */
class dbcontroller {
     private $conn;
    function __construct() {
        
        include_once 'dbconnect.php';
    
        $db=new dbconnect();
        $this->conn=$db->connect();
    }
    public function userlogin($username, $password){
        $stm=$this->conn->prepare("select * from student where username=? and password=?");
    
          $stm->bind_param("ss", $username, $password);
          $stm->execute();
          $stm->store_result();
          if($stm->num_rows>0){
              return 1;
             
          }else {
              return 2;
    }
}

public function update($user,$new) {
        $stm= $this->conn->prepare("UPDATE student
SET password=? WHERE username=?;");
        $stm->bind_param("ss",$new,$user);
        //$stm->execute();
        if($stm->execute()){
            return 1;
        }else{
            return 2;
            
        }
       
        
        
    }
//    public function getprevelage($username){
//            $stm= $this->conn->prepare("select * from student where username=?");
//            $stm->bind_param("s",$username);
//            $stm->execute();
//            //this will return
//            return $stm->get_result()->fetch_assoc();
//}

   public function signupp($full_name,$phone_number,$program,$username,$password,$signup_date){
         $stm= $this->conn->prepare("insert into student(full_name,phone_number,program,username,password,signup_date) values(?,?,?,?,?,?);");
         $stm->bind_param("ssssss",$full_name,$phone_number,$program,$username,$password,$signup_date);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
        
        public function officerlogin($username,$password) {
        $stm= $this->conn->prepare("select * from office where username=? and password=?");
        $stm->bind_param("ss",$username,$password);
        $stm->execute();
        $stm->store_result();
        if($stm->num_rows>0){
            return 1;
           
        }else{
            return 2;
            
        
}
}   
public function Approved($requestid,$officeid,$status,$approvedate,$rejectionreason){
      $stm= $this->conn->prepare("insert into status(requestid,officeid,status,approvedate,rejectionreason) values(?,?,?,?,?);");
         $stm->bind_param("sssss",$requestid,$officeid,$status,$approvedate,$rejectionreason);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }    
    }
    public function getofficeid($user){
         $stm=  $this->conn->prepare("select * from office where username=?");
    $stm->bind_param("s", $username);
    $stm->execute();
    //this would return what is inside
    return $stm->get_result()->fetch_assoc();
        
    }





  
//    public function signuplogg($student_id,$UserName,$Password){
//         $stm= $this->conn->prepare("insert into user_log(UserName,Password,student_id,prevelage) values(?,?,?,student);");
//         $stm->bind_param("sss",$student_id,$UserName,$Password);
//         if($stm->execute()){
//             return 1;
//             
//         }else{
//             return 2;
//         }
//            
//        }
        


}
?>