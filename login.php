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
		<style>
			.loginPageContent{
				text-align: center;
				font-size: 20px;
			}
		</style>
		
	</head>
	<body>	
		<?php include('inc_header.php'); ?>
		<br/><br/><br/>
		<div class="loginPageContent">
			<form method = "POST" action = "<?php echo $_SERVER[ "PHP_SELF"]; ?>">
				<pre>User Name :  <input type = "text" name = "userNameTxt" value="<?php if(isset($_POST['login'])) { echo $_POST['userNameTxt'];}?>"/></pre>
				<pre>Password  :  <input type = "password" name = "passwordTxt"/></pre>
				<input type="submit" value="Login" name="login"/>
				<input type="Reset" value="Reset" onclick="window.location = 'login.php'"/>
			</form>
			
			<?php
				if(isset($_POST['login'])) {
					include('inc_database.php');
					$sql = "SELECT username, password FROM users WHERE username ='" . $_POST['userNameTxt'] .  "'AND password='" . $_POST['passwordTxt'] . "';";
					runQuery($sql);
					$row = $result->fetch_assoc();
					if (($row['username'] == $_POST['userNameTxt']) && ($row['password'] == $_POST['passwordTxt'])){
						//validates for existing user and sets session attributes and redirects to home page
						$_SESSION['name'] = "loggedIn";
						$_SESSION['username'] = $_POST['userNameTxt'];
						echo "<script>window.location.href='main.php';</script>";
					}
					else{
						echo "<h2>Invalid Username - Password combination. Please try again.</h2>";	
					}//end if/else 
				}//end outer if
			?>
		</div>
	</body>
</html>