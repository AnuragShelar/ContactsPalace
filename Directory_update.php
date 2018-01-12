	<?php
		require 'dbconfig/config.php';	
		?>

		<html>
		<head>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
			<link rel="stylesheet" href="indexcss.css">
		</head>
	<body>
		



	<div class="container">
				<div class="row">
			
					</div>
					<div class="col-sm-3">
						<br>
						<br>
						<a href="#">
							<input type="button" class="btn btn-danger" value="SIGN OUT"></input>
						</a>
					</div>
				</div>
			</div>
				<br>
				<br>
				<br>
				
			<div class="container" align="center">
				<div class="jumbotron">
					
					<br>
					<form method="post" action="Directory_update.php">
						<input type="text" name="name" class="form-control" placeholder="Enter name to update">
						<br>
						<input type="text" name="mob_no" class="form-control" placeholder="Enter phone number to update">
						<br>
						<input type="text" name="tele_no" class="form-control" placeholder="Enter telephone number to update">
						<br>
						<input type="submit" name="update_ok" class="btn btn-info" value="UPDATE CONTACT!">  
						<br>
					</form>
				</div>


	<?php
				if(isset($_POST['update_ok']))
		{
			$name_updated=$_POST['name'];
			$mob_no_updated=$_POST['mob_no'];
			$tele_no_updated=$_POST['tele_no'];
			


			$query="select * from contacts where name='$name_updated'";
			
	        $query_run=mysqli_query($conn,$query);
	                  
			
				 if (mysqli_num_rows($query_run)<0) {

				 	     echo "<script type='text/javascript'>alert('Contact Does not exist.......');</script>";//already exists

	                  }
	                  else
	                  {
	                  	 
	                  	 $query="UPDATE contacts SET name='$name_updated',mob_no='$mob_no_updated',tele_no='$tele_no_updated' WHERE name='$name_updated'";
	                     $query_run=mysqli_query($conn,$query);
	                     if ('query_run') {
	                         echo "<script type='text/javascript'>alert('Contact updated');</script>";
	                        
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

	</html>


