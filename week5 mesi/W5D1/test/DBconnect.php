<?PHP

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBconect
 *
 * @author Meseret Akalu
 */
class DBconnect {
    private $conn;
    function __construct()  {

    }
    function connect(){
        $host='localhost';
        $user='root';
        $pass='';
        $dbname='PHPfirst';
        $this->conn=new mysqli($host, $user, $pass, $dbname);
               
                return $this->conn;
    
        
    }
    
    }

