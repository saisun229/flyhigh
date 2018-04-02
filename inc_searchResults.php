<?php
	
	$fromCity = $_POST["fromCity"];
	$toCity = $_POST["toCity"];
	$tripType = $_POST['tripType'];
	$departDate = $_POST["departDate"];
	$returnDate = $_POST["returnDate"];
	$noOfTravellers = $_POST["noOfTravellers"];
	$travelClass = $_POST["travelClass"];
	$count = 1;
	
	//sql query for displaying routes/ flight details for selected fromCity and toCity
	$sql = "SELECT * FROM flights WHERE fromCity='" . $fromCity . "'AND toCity='" . $toCity . "';";
	runQuery($sql);
?>
<form method="POST" action="confirmTicket.php" onsubmit="return confirmTicket()">
	<!--Table for displaying search results-->
	<table> 
		<caption><b>Your Search Results</b> </caption> 
		<?php 
			//table heading
			echo "<tr>
					<td class='tableData'><b><i><u>From City</u></i></b></td>
					<td class='tableData'><b><i><u>To City</u></i></b></td>
					<td class='tableData'><b><i><u>Price</u></i></b></td>
					<td class='tableData'><b><i><u>Airlines</u></i></b></td>
					<td class='tableData'></td>		
				</tr>";
			while($row = $result->fetch_assoc()) { //fetch each record in result set 
				//fetch_assoc Returns an associative array
				//fuild table to display results 
				print("<tr>");
					echo "<td class='tableData'>" . $row['fromCity'] . "</td>";
					echo "<td class='tableData'>" . $row['toCity'] . "</td>";
					$row['price'] = $row['price'] * $noOfTravellers;
					if($tripType == "roundTrip"){
						$row['price']  = $row['price'] * 1.90;
					}//end if
					if($travelClass == "business"){
						$row['price'] = $row['price'] * 1.50;
					}//end if
					if($travelClass == "firstClass"){
						$row['price'] = $row['price'] * 1.80;
					}//end if
					echo "<td class='tableData'>" . $row['price'] . " INR</td>";
					echo "<td class='tableData'>" . $row['airlines'] . "</td>";
					echo '<td><button class="button" name="bookNowButton" value="' . $row["fromCity"]. ";" . $row["toCity"] . ";" . $row["price"] . ";" . $row["airlines"] . '">Book Now</button></td>';
				print("</tr>");
			}// end while  
		?>
	</table>
</form>

<script>
		function confirmTicket(){
			//confirmTicket is executed when user clicks bookNowButton and allows user to book ticket only if logged in. 
			if(<?php echo '"'.$_SESSION['name'].'"'?> != "loggedIn"){
				alert('Please login to Make a reservation');
				return false;
			}//end if
			if(<?php echo '"'.$_SESSION['name'].'"'?> == "loggedIn"){
				return confirm('Are you sure you want to make this reservation ?');
			}//end if
		}//end confirmTicket function
</script>
