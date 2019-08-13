<!--<!DOCTYPE html>

To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

--><html>
    <head>
        
        <title>Online Student Clearance System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
          <!--<title>Material Design Bootstrap</title>-->
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
        <style>
            .login{
                width: 300px;
                height: 300px;
                background-color: blanchedalmond;
                alignment-adjust: central;
           margin: 5% 10% 40% 30%;
           padding: 8%;
            } 
            
        </style>
    </head>
    <body>
        

        <div class="login">
            <h4>LOGIN</h4>
        <!--<a href="../MDB-Free_4.8.2/index.html"></a>-->
 <form action="../model/dblogin.php" method="POST">
     <input type="text" placeholder="User Name" name="username"/> <br><br>
     <input type="password" placeholder="Password" name="password"/> <br><br>
     <button>Login</button> </br>
     <h4>Not registered?</h4><a href="../viewer/signup.php">Sign Up</a>
                 
      </form>
       
        </div>


        
        <footer class="#cfd8dc blue-grey lighten-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

   
      <!-- Grid column -->

    </div>
   

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
  <a href="Home.html">online student clearance system </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<!--/.Navbar-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>   
        
        
        
    </body>
</html>




