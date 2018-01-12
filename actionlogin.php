<!Doctype html>
<html>
   <head>
         <title>Activity</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="topnav.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="icon.css">
         
         <link rel="stylesheet" type="text/css" href="actionlogincss.css">

  
  
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



              
   

  <div class="row">
        <div class="col-md-3 jumbotron" id="btn_add">

          <a href="Directory_add.php">
            <br>          
            <button class="ADD Add1">ADD</button>
            <h5>Add a new Contact</h5>
            Adds a new entry in your contact book.
            <br>
          </a>
        </div>

        <div class="col-md-3 jumbotron" id="btn_update">
          <a href="Directory_update.php">
            <br>
            <button class="UPDATE Add1">UPDATE</button>
            <h5 >Update existing Contact</h5>
            Updates your desired Contact.
            <br>
          </a>
        </div>

        <div class="col-md-3 jumbotron" id="btn_delete">
          <a href="Directory_delete.php">
            <br>
            <button class="DELETE Add1">DELETE</button>
            <h5>Delete a Contact</h5>
            Removes your selected entry from the contact book.
          </a>
        </div>

        <div class="col-md-3 jumbotron" id="btn_search">
          <a href="Directory_search.php">
            <br>
            <button class="SEARCH Add1">SEARCH</button>
            <h5>Search for a contact</h5>
            Fetches your desired Contact.
            <br>
          </a>
        </div>

      </div>

      </div>



</div>

<br>
<br>
<br>
<br>
<br>





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
