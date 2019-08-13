
<?php
 
 
       include_once '../controller/dbconnect.php';
       $db=new dbconnect();
       $conn=$db->connect();
//       $query="select * from request";//to fetch data
       $query="SELECT *
FROM student
INNER JOIN request
ON student.stud_id=request.stud_id";
       $result=mySqli_query($conn,$query);//database files
       
       
       
        ?>

<!DOCTYPE html>
<!—
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
—>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <form action="../model/Approved.php" id="approve" method="post">
            <input type="hidden" name="request_id" id="request_id"/>
<!--             <input type="text" name="office_id" id="office_id"/>
              <input type="text" name="status" id="status"/>-->
            
        </form>
        <form action="../model/Reject.php" id="reject" method="post"></form>
        
        <table border="1" id="mytable" >
            <tr>
                <th>Request id</th>
                <th>studentname</th>
                <th> phonenumber</th>
                <!--<th>email</th>-->
                <th> program</th>
               
                <th>requesttype</th>
                <th>requestdate</th>
<!--                <th> Lastapproved</th>-->
              <th> action</th>
              
              
            </tr>
            <?php while($row= mysqli_fetch_array($result)):;?>
            <tr>
                <td> <?php echo $row[16];?></td>
                <td> <?php echo $row[1];?></td>
                 <td> <?php echo $row[7];?></td>
                 <td> <?php echo $row[5];?></td>
                   <td> <?php  echo $row[12];?></td>
                 <td> <?php echo $row[13];?></td>
                 
                   
                 <td><button form="approve">Approve</button>
                     <button form="reject">Reject</button>
                 </td>
                
            </tr>
            <?php endwhile;?>
        </table>
        
        
        <script>
            
           var row1=document.getElementById('mytable'),rIndex;
           
                   for(var i=1;i<row1.rows.length;i++){
                      
                       row1.rows[i].onclick=function (){
                           
                           rIndex=this.rowIndex;
                           // alert(rIndex);
                           
                           document.getElementById('request_id').value=this.cells[0].innerHTML;
                          // document.getElementById('office_id').value=this.cells[].inner.HTML;
                          
                           
                           
                           
                           
                       };
                   }
        
        </script>
    </body>
</html>