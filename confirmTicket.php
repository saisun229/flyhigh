<?php

	//Resume session
	session_start();
	include("inc_database.php");
	if (isset($_POST['bookNowButton'])) {
		//if bookNowButton is set, insert reservation details into table.
		$ticketDetails = explode(";",$_POST['bookNowButton']);
		$fromCity = $ticketDetails[0];
		$toCity = $ticketDetails[1];
		$price = $ticketDetails[2];
		$airlines = $ticketDetails[3];
		$confNo = "FH" . rand(7000000,7999999); //generate random confirmation number
		$sql = "INSERT INTO reservations (username, reservationNo, fromCity, toCity, price, airlines) VALUES ('". $_SESSION['username'] ."', '". $confNo ."', '". $fromCity ."', '". $toCity ."', '". $price ."', '". $airlines ."');";
		runQuery($sql);
	}
	else{
		$confNo = 10;
		//if bookNowNow button is not set, display reservations exising in database.
		$sql = "SELECT fromCity, toCity, price, airlines FROM reservations WHERE reservationNo = '". $confNo ."';";
		runQuery($sql);
		
	} //end if/else
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>FlyHigh.com</title>
		<link rel="stylesheet" type="text/css" href="flyHigh.css">
		<style>
			table{ 
				background-color: lightgray; 
				border-collapse: collapse; 
				border: 1px solid gray; 
				width: 50%;
			}
			.tableData { padding: 10px; font-size:25px;} 
			tr:nth-child(odd) { background-color: white; }
		</style>
	</head>
	<body>	
		<?php
			include('inc_header.php');
		?>
		<div class= "content">
		<?php
			if (isset($_POST['bookNowButton'])) {
				//display confirm ticket message with reservation number.
				echo "<h3>Congrats ".$_SESSION['username'].",</h3><h3>Thank you for choosing FlyHigh.com</p><p>We will send you an e-ticket receipt confirming your reservation once our processing is complete. </h3><h1>Your confirmation number is ". $confNo ."</h1>";
				
			}
		?>
		<table align="center"> 
			<caption><b>Your Ticket Details</b> </caption> 
			<?php //Fetch each record in result set 
			//display ticket table
				print("<tr>");
					echo "<td class='tableData'>From City : </td>";
					echo "<td class='tableData'>" . $fromCity . "</td>";
				print("</tr>");
				print("<tr>");
					echo "<td class='tableData'>To City : </td>";
					echo "<td class='tableData'>" . $toCity . "</td>";
				print("</tr>");
				print("<tr>");
					echo "<td class='tableData'>Price : </td>";
					echo "<td class='tableData'>" . $price . " INR</td>";
				print("</tr>");
				print("<tr>");
					echo "<td class='tableData'>Airlines : </td>";
					echo "<td class='tableData'>" . $airlines . "</td>";
				print("</tr>");			
			?>
		</table>
		</div>
	</body>
</html>


