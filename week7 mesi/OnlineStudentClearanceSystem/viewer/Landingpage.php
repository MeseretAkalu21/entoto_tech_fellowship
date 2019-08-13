<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>landing page</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  
  <style>
      .land{
     background-color: lightblue;
    border: 3px rgb(14, 2, 2) solid;
    border-radius: 40px;
    margin-top: 50px;
    margin-left:550px;
    margin-right: 500px;
    padding-bottom:0px;
    padding-top: 25px;
    text-align: center;
    font-size: 20px; 
    font-family: 'Times New Roman';
    height: 300px;
    width: 600px;
           
  </style>
  
  
    </head>
    <body>     
        <div class="land"> 
            <h1>Online Clearance System  </h1>
            <h3>Select your account </h3>
            <div class="mask rgba-black-light align-items-center">
         <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-info" onclick="toHome()">Student</button>
            <button type="button" class="btn btn-info" onclick="toOffice()">Office</button>
            
        </div>
       </div>

           <script>
            function toHome(){
                window.open("signup.php");
            }
            </script>
            
              <script>
            function toOffice(){
                window.open("officeloginpage.php");
            }
            </script> 
      <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>   
        
           
    </body>
</html>
