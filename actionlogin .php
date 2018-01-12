<html>

<!--ALL LINKS NEEDED START HERE-->
	<head>
		<title>
			Profile
		</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="actionlogincss.css">
	</head>
<!--ALL LINKS NEEDED END HERE-->

<!--ALL HTML DESIGNING CODES-->
	<body>
		<div class="container-fluid">
			<br>
			<h2 class="display-2">Contacts Palace<br></h2>
			<h2><small>A secure and easy way to store your contacts.</small></h2>
			<br>
			<br>
		</div>



		<div class="container">




			<div class="row">
				<div class="col-md-3 jumbotron" id="btn_add">
					<a href="Directory_add.php">
						<br>
						<h5>Add a new Contact</h5>
						Adds a new entry in your contact book.
						<br>
					</a>
				</div>

				<div class="col-md-3 jumbotron" id="btn_update">
					<a href="Directory_update.php">
						<br>
						<h5 >Update existing Contact</h5>
						Updates your desired Contact.
						<br>
					</a>
				</div>

				<div class="col-md-3 jumbotron" id="btn_delete">
					<a href="Directory_delete.php">
						<br>
						<h5>Delete a Contact</h5>
						Removes your selected entry from the contact book.
					</a>
				</div>

				<div class="col-md-3 jumbotron" id="btn_search">
					<a href="Directory_search.php">
						<br>
						<h5>Search for a contact</h5>
						Fetches your desired Contact.
						<br>
					</a>
				</div>

			</div>

			</div>




			<?php 

			if(isset($_POST['btn_add']))
	{
		
		$name=$_POST['name'];
		$mob_no=$_POST['mob_no'];
		$tele_no=$_POST['tele_no'];
		


		$query="select * from contacts where name='$name'";
		//echo $query;
        $query_run=mysqli_query($conn,$query);
                  
		
			 if (mysqli_num_rows($query_run)>0) {
                     # code...
                      echo "<script type='text/javascript'>alert('Contact Already Exists.......');</script>";//already exists
                  }
              else
                  {
                     $query="insert into contacts values ('$name','$mob_no','$tele_no')";
                     $query_run=mysqli_query($conn,$query);
                     if ('query_run') {
                         echo "<script type='text/javascript'>alert('Contact saved');</script>";
                        # code...
                     }
                     else
                     {
                      echo "<script type='text/javascript'>alert('Error');</script>";
                     }
                  }
        }


			 ?>
		</div>

	</body>
<!--ALL HTML DESIGNING CODES END HERE-->

</html>