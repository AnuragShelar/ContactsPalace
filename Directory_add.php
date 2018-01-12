<?php
	require 'dbconfig/config.php';	
	?>

	<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="indexcss.css">

	</head>
		
	<body>






	


	<div class="container" >

			<div class="jumbotron" align="center">
				<br>
				<br>
				<form method="post" action="Directory_add.php" class="form-control">
					
					<label><h6>Enter name </h6></label>
					<input type="text" name="name" required></input>
					<br>
					<br>
					<label><h6> Enter Phone number</h6></label>
					<input type="text" name="mob_no" required></input>
					<br>
					<br>
					<label><h6>Enter Telephone number</h6></label>
					<input type="text" name="tele_no"></input>
					<br>
					<br>

					<input type="submit" name="OK" class="btn btn-primary" value="ADD">
					
				</form>
				<br>
				<br>
			</div>

			<?php

	if(isset($_POST['OK']))
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
                        
                         
                     }
                     else
                     {
                      echo "<script type='text/javascript'>alert('Error');</script>";
                     }
                  }
        }
	

	

/*if(isset($_POST['btn_update']))
	{
		$name_updated=$_POST['name'];
		$mob_no_updated=$_POST['mob_no'];
		$tele_no_updated=$_POST['tele_no'];
		


		//$query="select * from contacts where name='$name'";
		//echo $query;
        //$query_run=mysqli_query($conn,$query);
                  
		
			 if (mysqli_num_rows($query_run)>0) {
                     # code...
                      echo "<script type='text/javascript'>alert('Contact Already Exists.......');</script>";//already exists
                  }
              
                  
                     $query="UPDATE contacts SET name='$name_updated',mob_no='$mob_no_updated',tele_no='$tele_no_updated' WHERE name='$name';
                     $query_run=mysqli_query($conn,$query);
                     if ('query_run') {
                         echo "<script type='text/javascript'>alert('Contact updated');</script>";
                        
                     }
                     else
                     {
                      echo "<script type='text/javascript'>alert('Error');</script>";
                     }
                  
        }
        */
       

	?>
	</body>

</html>

	