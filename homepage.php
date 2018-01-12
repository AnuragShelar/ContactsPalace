<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Palace</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="profiledesign.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="topnav.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="carousel.css">
  <link rel="stylesheet" type="text/css" href="icon.css">
</head>
  <body>

    <nav class="navbar navbar-light" style="background-color: #99ffbb" >
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
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
     <div class="carousel-inner">
      <div class="item active">
        <img src="slide0.jpg" alt="Los Angeles" style="width:100%;">
        <div  class="carousel-caption">
          <h2>From Where it all started</h2>
        </div>
      </div>

      <div class="item">
        <img src="slide1.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="cool.jpg" alt="New york" style="width:100%;">
      </div>
    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h1><b>What We Do</b></h1><br>
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      <img src="addcontact.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h1>Add a new contact</h1></p>
    </div>
    <div class="row">
    <div class="col-sm-3">
      <img src="updatecontact.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h1>Update a new contact</h1></p>
    </div>
     <div class="row">
    <div class="col-sm-3">
      <img src="Deletecontact.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h1>Delete an existing contact</h1></p>
    </div>
    <div class="row">
    <div class="col-sm-3">
      <img src="searchcontact.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h1>Search a contact</h1></p>
    </div>
  </div>
  
    
    <br>
<br><br><br><br>
<br><br><br><br>
<div>
    <footer class="text-center">
  <a class="up-arrow" href="homePage.php" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <div>
  <p>Copyright @<a href="https://ves.ac.in/" data-toggle="tooltip" title="Visit vesit.ac.in">vesit.ac.in</a></p>
  <div class="card">
 

  <p class="title"></p>
  <p><h2>Vivekanand Education Society Institute Of Technology</h2></p>
  <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
  
  <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>

  
</div>
</div>
 
  
</footer>
</div>
<script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>


  </body>
  </html>