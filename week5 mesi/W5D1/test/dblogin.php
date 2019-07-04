<?php
class dblogin {
    private $conn;
    function __construct(){
        include_once 'DBconnect.php';
        $db=new DBconnect();
        $this->conn=$db->connect();
    }

    public function userlogin($user,$pass){
   $stm=$this->conn->prepare("select *from login where username=? and password=?");
    $stm->bind_param("ss", $user, $pass);
    $stm->execute();
    $stm->store_result();
    if($stm->num_rows>0){
        return 1;
      
    } else {  
      
        return 2;   
    }
    }
    public function signup($full_name,$age,$phone,$Email){
        $stm= $this->conn->prepare("insert into signup(full_name,age,phone,Email) values(?,?,?,?);");
        $stm->bind_param("ssss",$full_name,$age,$phone,$Email);
        if($stm->execute()){
            return 1;
        }else{
        
            return 2;
        }
    }
    
}


