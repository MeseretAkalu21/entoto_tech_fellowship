<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbllogin
 *
 * @author selam
 */
class dbblogin {
     private $conn;
    function __construct() {
        include_once 'dbconnect.php';
        $db=new dbconnect();
        $this->conn=$db->connect();
        
        
    }
    public function userlogin($lastdate,$type,$reason){
        $stm=$this->conn->prepare("select * from request where lastdate=? and type=? and reason=?");
        $stm->bind_param("sss",$lastdate,$type,$reason);
        $stm->execute();
        $stm->store_result();
        if($stm->num_rows>0){
        return 1;
        }
            else{
                return 2;
            }
    }
          
   public function request($lastdate,$type,$reason){
                $stm= $this->conn->prepare("insert into request(lastdate,type,reason) values(?,?,?);");
                $stm->bind_param("sss",$lastdate,$type,$reason);
                if($stm->execute())
                    {
                    return 1;
                }else{
                    return 2;
                }
                
            }
                
            
//        public function updatepass($lastdate,$reason){
//        $stm=$this->conn->prepare("updatepass login set password=? where username=? ");
//        $stm->bind_param("ss",$newpass,$user);
//         if($stm->execute()){
//                    return 1;
//                }else{
//                    return 2;
//                }
//        
//          
//             }
}
