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
			.registerPageContent{
				text-align: center;
				font-size: 20px;
			}
		</style>
	</head>
	<body>	
		<?php include('inc_header.php'); ?>
		<br/><br/><br/>
		<div class="registerPageContent">
			<form method = "POST" action = "<?php echo $_SERVER[ "PHP_SELF"]; ?>">
				<pre>Enter User Name    :  <input type = "text" name = "userNameTxt" value="<?php if(isset($_POST['signUp'])) { echo $_POST['userNameTxt'];}?>"/></pre>
				<pre>Enter Password     :  <input type = "password" name = "passwordTxt1"/></pre>
				<pre>Re-Enter Password  :  <input type = "password" name = "passwordTxt2"/></pre>
				<p><label id = "displayTextLabel"></label></p>
				<input type="submit" value="Sign Up" name="signUp"/>
				<input type="Reset" value="Reset" onclick="window.location = 'register.php'"/>
			</form>
		
			<?php
				if(isset($_POST['signUp'])) {
					include('inc_validate.php');
					if($_POST['userNameTxt'] != ""  && $_POST['passwordTxt1'] != "" && $_POST['passwordTxt2'] != ""){
						//to validate username, password, confirm password is not empty
						if(validateAlphanumeric($_POST['userNameTxt'])){
							//call validateAlphanumeric function to check if entered text is alphanumeric.
							if(validateAlphanumeric($_POST['passwordTxt1'])){
								//call validateAlphanumeric function to check if entered text is alphanumeric.
								if(strcmp($_POST['passwordTxt1'], $_POST['passwordTxt2']) == 0){
									//validate if password and confirm password are same
									if(strlen($_POST['passwordTxt1']) >= 8){
										//validate if password entered is minimum of 8 characters
										include('inc_database.php');
										$sql = "SELECT username FROM users WHERE username ='" . $_POST['userNameTxt'] . "';";
										runQuery($sql);
										$row = $result->fetch_assoc();
										if($row['username'] == $_POST['userNameTxt']){
											//validates for already exisiting username
											echo "<h2>Error Occured : Existing username. Please choose different username</h2>";
										}
										else{
											//if username is unique and passes all validations then values are inserted into database.
											$sql = "INSERT INTO users (username, password) VALUES ('". $_POST['userNameTxt'] ."', '". $_POST['passwordTxt1'] ."');";
											runQuery($sql);
											echo "<h2>You have successfully signed up. Please login to access your account</h2>";
										}//end if/else
									}
									else{
										echo "<h2>Error Occured : Password should be minimum of 8 characters.</h2>";
									}//end if/else password minimum 8 characters validation
								}//end if - validate same password 
								else{
									echo "<h2>Error Occured : Passwords do not match.</h2>";
								}//end if/else compare passwords
							}
							else{
								echo "<h2>Error Occured : Password is not alphanumeric.</h2>";
							}
						}//end if/else validate alphanumeric password
						else{
							echo "<h2>Error Occured : Username is not alphanumeric.</h2>";
						}//end if/else validate alphanumeric username
					}
					else{
						echo "<h2>Error Occured : Username or Password cannot be blank.</h2>";
					}//end if/else, validates username or password is not blank
				}//end if/else outer
			?>
		</div>
	</body>
</html>