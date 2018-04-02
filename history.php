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
			table{ 
				background-color: lightgray; 
				border-collapse: collapse; 
				border: 1px solid gray; 
				width: 80%;
			}
			.tableData { padding: 10px; font-size:25px;} 
			tr:nth-child(odd) { background-color: white; }
		</style>
	</head>
	<body>
		<?php 
			include('inc_header.php');
			include('inc_database.php');
		?>
		<div class= "content">
		<script>
			function confirmCancellation(){
				//function is called when form is submitted and displays confirm box to user, if user clicks ok the returns true else returns false.
				if(confirm('Are you sure you want to cancel reservation ?')){
					return true;
				}
				else{
					return false;
				}//end if/else 
			}//end confirmCancellation function
		</script>
		<?php
			if(isset($_POST['cancelReservation'])){
				//if user clicks cancel reservation executes delete query to delete value from database
				$sql = "DELETE FROM reservations WHERE reservationNo='". $_POST['cancelReservation'] ."';";
				runQuery($sql);
				echo "<h1>Your Reservation has be cancelled</h1>";
				$_POST = array(); //to reset the associative array
			}
		?>
		<form method="POST" action="<?php echo $_SERVER[ "PHP_SELF"]; ?>" onsubmit="return confirmCancellation()">
			<?php
				//if user already logged in display previous reservation else display a messsage - Please log in to view your reservations
				if($_SESSION['name'] == "loggedIn"){
					echo "<table>";
					echo "<caption><b>Your Reservation History</b> </caption>";
					$sql = "SELECT reservationNo, fromCity, toCity, price, airlines FROM reservations WHERE username = '". $_SESSION['username']."';";
					runQuery($sql);
					//table heading
					echo "<tr>
							<td class='tableData'><b><i><u>Confirmation Number</u></i></b></td>		
							<td class='tableData'><b><i><u>From City</u></i></b></td>
							<td class='tableData'><b><i><u>To City</u></i></b></td>
							<td class='tableData'><b><i><u>Price</u></i></b></td>
							<td class='tableData'><b><i><u>Airlines</u></i></b></td>
							<td class='tableData'></td>		
						</tr>";
					//table body
					while($row = $result->fetch_assoc()) {
						//fetch_assoc Returns an associative array
						//build table to display results 
						print("<tr>");
							echo "<td class='tableData'>" . $row['reservationNo'] . " </td>";
							echo "<td class='tableData'>" . $row['fromCity'] . "</td>";
							echo "<td class='tableData'>" . $row['toCity'] . "</td>";
							echo "<td class='tableData'>" . $row['price'] . " INR</td>";
							echo "<td class='tableData'>" . $row['airlines'] . "</td>";
							echo '<td><button class="button" name="cancelReservation" value="' . $row['reservationNo'] . '">Cancel Reservation</button></td>';
						print("</tr>");
					}// end while  
					echo "</table>";
				}
				else{
					echo "<h1>Please log in to view your reservations</h1>";
				}//end if/else
			?>
		</form>
		</div>
	</body>
</html>