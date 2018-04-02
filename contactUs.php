<?php
	
	//Resume session
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>FlyHigh.com</title>
		<link rel="stylesheet" type="text/css" href="flyHigh.css">
	</head>
	<body>	
		<?php include('inc_header.php'); ?>
		<div class="content">
			<p><!--If user logged in display username else display string "user"-->
				<h2>Welcome <?php if($_SESSION['name'] == "loggedIn") echo $_SESSION['username']; else echo 'User';?>,</h2>
			</p>
			<p>
				<b><u><h2>About Us:</h2></u></b>
			</p> 
			<h3>
				We are a leading online travel company in India and committed to our mission of “creating happy travelers”. Through our website, www.flyhigh.com, leisure and business travelers can explore, research, compare prices and book a wide range of services catering to their travel needs.  
			</h3> 
			<p>
				<u><b><h2>Developers Info:</h2><b></u>
			</p>
					<h3>Sai krishna reddy, ID : 700657837</h3>
		</div>
	</body>
</html>
		
