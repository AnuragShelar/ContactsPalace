
<?php
   require 'dbconfig/config.php';
?>

<!Doctype html>
<html>
   <head>
         <title>Register Form</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="topnav.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="icon.css">
         <link rel="stylesheet" type="text/css" href="style.css"></link>
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
        <li><a href="homePage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
<?php session_start();
        $_SESSION['username'] = "matt";
?>
 
<?php
        if(isset($_POST['submit'])){
                move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
                $con = mysqli_connect("localhost","root","","profiles");
                $q = mysqli_query($con,"UPDATE users SET image = '".$_FILES['file']['name']."' WHERE username = '".$_SESSION['username']."'");
        }
?>
 

                <body>
                <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <input type="submit" name="submit">
                </form>
               
               
                <?php
                        $con = mysqli_connect("localhost","root","","profiles");
                        $q = mysqli_query($con,"SELECT * FROM users");
                        while($row = mysqli_fetch_assoc($q)){
                                echo $row['username'];
                                if($row['image'] == ""){
                                        echo "<img width='100' height='100' src='pictures/default.jpg' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img width='100' height='100' src='pictures/".$row['image']."' alt='Profile Pic'>";
                                }
                                echo "<br>";
                        }
                ?>
        </body>
</html>


        
            
         

         <div class="container">
            <img src="avamn.jpg"/>
           
            <form class="myform" action="register.php" method="post">
               
               <input type="text" name="username" class="inputvalues" placeholder="Your username" required="">
               <input type="password" name="Y_password" class="inputvalues" placeholder="Your Password" required="">
               <input type="password" name="confirm_password" class="inputvalues " placeholder="Confirm Your Password" required="">
               <input type="text" name="Phone_number" class="inputvalues" placeholder="Enter Your Mobile number" required=""><br>

               <input type="Submit" name="submit_btn" value="Sign In" class="btn-login">

               <a href="index.php"><input type="button" name="back_btn" value="Cancel" class="cancel-login"></a>
            <?php

            if (isset($_POST['submit_btn']))
             {
              // echo "<script type='text/javascript'>alert('Signed in');</script>";

               $username= $_POST['username'];
               $password=$_POST['Y_password'];
               $cpassword=$_POST['confirm_password'];
               $mnumber=$_POST['Phone_number'];

               if ($password==$cpassword) 
               {
                  $query="select * from userinfo where username='$username'";
                  $query_run=mysqli_query($conn,$query);
                  

                  if (mysqli_num_rows($query_run)>0) {
                     # code...
                      echo "<script type='text/javascript'>alert('Username Already Exists.......Try Another Username');</script>";//already exists
                  }
                  # code...
                  else
                  {
                     $query="insert into userinfo values ('$username','$password')";
                     $query_run=mysqli_query($conn,$query);
                     if ('query_run') {
                         echo "<script type='text/javascript'>alert('User Registered ....Go Back To Login Page');</script>";
                        # code...
                     }
                     else
                     {
                      echo "<script type='text/javascript'>alert('Error');</script>";
                     }
                  }
               }
               else
               {
                 echo "<script type='text/javascript'>alert('Password doesn't Matched );</script>";  
               }
            }

             ?>

           </form>
         </div>

         <br><br><br><br>


  <footer class="text-center">
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
         
         