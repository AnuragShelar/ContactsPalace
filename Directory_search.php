<?php
	require 'dbconfig/config.php';	
	?>

	<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="indexcss.css">
	</head>


<body>
	
<div class="container heading">
			<div class="col-9-sm">
				
				<br>
				
			</div>
			<div class="col-3-sm" align="right" >
				<a href="actionlogin.php"><button class="btn btn-danger" type="button" >SIGN OUT</button></a>
			</div>
			<br>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div class="container" align="center">
			<div class="jumbotron">
				<form method="post" action="#">
					<input type="text" class="form-control" placeholder="Enter name to search a contact" name="search_name"></input>
					<br>
					<input type="submit" name="search" class=" btn btn-info"></input>
				</form>
			</div>
			<br>
		</div>

</body>
</html>                  
		
			  
                  
                    
        }
