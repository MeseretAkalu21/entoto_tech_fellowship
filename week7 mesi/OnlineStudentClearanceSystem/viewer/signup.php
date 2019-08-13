
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">  
    </head>
    
    <style>
    .signup{
    background-color: pink;
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
    height: 600px;
    width: 500px;
    
}
</style>

    
    <body> 
        <div class="signup">
        <h1>Create Account</h1>
      
          <h5 class="card-header info-color white-text text-center py-4">
                        <!--<strong>Sign up</strong>-->
                    </h5>

        <form action="../model/modelsignup.php" class="text-center" method="POST" style="color: #757575;" >

           full_name:<input name="full_name" type="text" id="materialRegisterFormFirstName" class="form-control"><br><br>

                                    <!--<div class="md-form">-->
           phone_number: <input name="phone_number" type="number" id="materialRegisterFormLastName" class="form-control"><br><br>
                       
                            <!--<div class="md-form mt-0">-->
           Programm: <select name="program" class="browser-default custom-select"><br><br>
           <option selected value="UG">Under Graduate</option><br><br>
           <option value="PG">Post Graduate</option><br><br>
                            
                       </select><br><br>
                
          username: <input name="username" type="text" id="materialRegisterFormEmail" class="form-control"><br><br>
                            
         password: <input name="password" type="text" id="materialRegisterFormEmail" class="form-control"><br><br>
                            
           signup_date: <input name="signup_date" placeholder="Selected date" type="date" id="date-picker-example" class="form-control datepicker"><br><br>
                              
           <button>Sign up</button>
            <!--<p style="color:green;"><?php echo $output;?></p>-->
                            <!-- Register -->
             <p>Already a member?
            <a href="./login.php">Login</a>
                            </p>
 </form>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

    </body>
</html>
   
