<?php
   require 'dbconfig/config.php';
?>
<!Doctype html>
<html>
   <head>
         <title>Login Form</title>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="topnav.css">
         <link rel="stylesheet" type="text/css" href="style.css"></link>
         <link rel="stylesheet" type="text/css" href="footer.css">
         <link rel="stylesheet" type="text/css" href="topnav.css">
         <link rel="stylesheet" type="text/css" href="icon.css">
              </head>


      <body>


        <nav class="navbar navbar-light" style="background-color: #99ffbb">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img id="icon" src="icon3.jpg"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
  -     <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="homePage.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



        

        
         <div class="container">
            <img src="avamn.jpg"/>
            <form action="index.php" method="post">
               <div class="font-input">
                  <input type="text" name="username" placeholder="Enter username" required>
               </div>
               <div class="font-input">
                  <input type="password" name="password" placeholder="Enter password" required>
               </div>
               <input type="Submit" name="Submit" value="Login" class="btn-login"><br>
               <a href="#"><p>forget password?</p></a>

              <a href="register.php"> <input type="button" name="Submit" value="Register" class="btn-register"></a>
         </div>

         <div class="conatiner">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   <title>Insert title here</title>
   <script src="https://apis.google.com/js/platform.js" async defer></script>
   <meta name="google-signin-client_id" content="82989339632-tqrphej1katik6lg2ts8b4tqiripfrof.apps.googleusercontent.com">
</head>

   <div class="g-signin2" data-onsuccess="onSignIn" id="myP"></div>
      <img id="myImg"><br>
      <p id="name"></p>
      <div id="status">
   </div>
   <script type="text/javascript">
      function onSignIn(googleUser) {
       //window.location.href='actionlogin.php';
      var profile = googleUser.getBasicProfile();
      var imagurl=profile.getImageUrl();
      var name=profile.getName();
      var email=profile.getEmail();
      document.getElementById("myImg").src = imagurl;
      document.getElementById("name").innerHTML = name;
      document.getElementById("myP").style.visibility = "hidden";
      document.getElementById("status").innerHTML = 'Welcome '+name+'!<a href="index.php"                
      email='+email+'&name='+name+'/>Continue with Google login</a></p>
   }
   </script>
   <button onclick="myFunction()">Sign Out</button>
   <script>
      function myFunction() {
      gapi.auth2.getAuthInstance().disconnect();
      location.reload();
   }
   </script>




         
         <?php 
         if (isset($_POST['Submit']))
         {

           $username=$_POST['username'];
           $password=$_POST['password'];

           $query="select * from userinfo where username='$username' and password='$password' ";

           $query_run=mysqli_query($conn,$query);
           if(mysqli_num_rows($query_run)>0)
           {
            $_SESSION['username']=$username;
            header('location:actionlogin.php');

           }
           else
           {
             echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
           }

         
         
         }
         ?>



        <br> <br><br> <br>
        <br> <br><br> <br><footer class="text-center">
  <a class="up-arrow" href="homePage.php" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Copyright @<a href="vesit.ac.in" data-toggle="tooltip" title="Visit vesit.ac.in">vesit.ac.in</a></p> 
</footer>

<script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>




      </body>
         </html>

<button>hi</button>