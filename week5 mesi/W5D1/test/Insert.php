<?php

$conn = mysqli__connect('127.0.0.1','root','');

   if(!$conn)
   {
       echo'not connected to server';
   }
if(!mysqli_select_db($conn,'tutorial'))
{
    echo 'database not selected';
}
     $Name = $_POST['username'];
     $Email = $_POST['Email'];
    
   $sql = "InSERT INTO person (name,Email) VALUES ('$Name','$Email')";        
   
     if(!mysqli_query($conn,$sql))
     {
         echo 'Not Inserted';
     }
       else 
     {
    echo 'Inserted';     
}
    header("refresh:2; url=index.html"); 
     
    ?>