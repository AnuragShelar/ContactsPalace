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
			<h1 class="display-1">Telephone Directory</h1>

			<div class="jumbotron" align="center">
				<br>
				<br>
				<form method="post" action="Directory_delete
				.php" class="form-control">
					
					<label><h6>Enter name</h6></label>
					<input type="text" name="name" required></input>
					<br>
					

					<input type="submit" name="Delete" class="btn btn-primary" value="Delete">
					
				</form>
				<br>
				<br>
			</div>


				<?php
		if(isset($_POST['Delete']))
	{

		$name=$_POST['name'];
		


		$query="select * from contacts where name='$name'";
		//echo $query;
        $query_run=mysqli_query($conn,$query);
                  
		
			 if (mysqli_num_rows($query_run)>0) {
                     # code...
			 		$query="delete from contacts where name='$name'";
                    $query_run=mysqli_query($conn,$query);
                     if ('query_run') 
                         echo "<script type='text/javascript'>alert('Contact deleted');</script>";
                     
                     
                  }
              else
                  {
                  	 echo "<script type='text/javascript'>alert('Contact Does not exist.......');</script>";//already exists
                        # code...
                  }
                    
                  
        }

        ?>



</div>
</body>
</html>


