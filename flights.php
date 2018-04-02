<?php
	//Created by Saini, Munuma, Simhadhri
	//ID: 700657183, 700645476, 700648290
	
	//Resume session i
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
				width: 100%;
			}
			.tableData { padding: 10px; font-size:25px;} 
			th {padding: 10px; font-size:25px;}
			tr:nth-child(odd) { background-color: white; }
		</style>
	</head>
	<body>	
		<?php
			include('inc_header.php');
		?>
		<div class= "content">
			<div class= "searchResults">
			<form method = "POST" action = "<?php echo $_SERVER[ "PHP_SELF"]; ?>">
				<!--sticky from containing fromCity, toCity, departure date, return date, class, no of travellers fields-->
				<p>
					<input type="radio" value="oneWay"  name="tripType" checked/> One Way &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" value="roundTrip" name="tripType" <?php if(isset($_POST['searchQuery']) && ($_POST['tripType'] == 'roundTrip')) echo 'checked';?>/> Round Trip
				</p>
				<p>
					From : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<select name="fromCity" id="fromCityId">
					<?php
						//fetch fromCity from database and fill fromcity dropdown
						include('inc_database.php');
						$sql = "SELECT DISTINCT fromCity FROM flights";
						runQuery($sql);
						while($row = $result->fetch_assoc()) {
						//	echo("<script>console.log('PHP: ".$row[fromCity]."');</script>");
							echo '<option value="' . $row['fromCity'] . '" ' . ((isset($_POST['searchQuery']) && ($_POST['fromCity'] == $row['fromCity']))?'selected':'') .'>'. $row['fromCity'] . '</option>';
						}
					?>	
					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					To : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<select name="toCity">
					<?php
						//fetch toCity from database and fill toCity dropdown
						$sql = "SELECT DISTINCT toCity FROM flights";
						runQuery($sql);
						while($row = $result->fetch_assoc()) {
							//echo '<option value="' . $row['toCity'] . '">' . $row['toCity'] . '</option>';
							echo '<option value="' . $row['toCity'] . '" ' . ((isset($_POST['searchQuery']) && ($_POST['toCity'] == $row['toCity']))?'selected':'') .'>'. $row['toCity'] . '</option>';
						}
					?>
					</select>
				</p>
				<p>
					Depart :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="departDate" type="date" value="<?php 
										//set todays date as departure date
										if(isset($_POST['searchQuery'])) echo $_POST['departDate'];
										else echo date('Y-m-d'); 
										?>"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Return :&nbsp;&nbsp;<input name="returnDate" type="date" value="<?php 
										//set tomorrows date as retutn date
										if(isset($_POST['searchQuery'])) echo $_POST['returnDate'];
										else echo date('Y-m-d', strtotime('tomorrow')); 
										?>"/>
				</p>
				<p>
					Travellers : &nbsp;
					<select name="noOfTravellers">
						<option value="1" <?php if(isset($_POST['searchQuery']) && ($_POST['noOfTravellers'] == '1')) echo 'selected'; ?>>1 Traveller</option>
						<option value="2" <?php if(isset($_POST['searchQuery']) && ($_POST['noOfTravellers'] == '2')) echo 'selected'; ?>>2 Travellers</option>
						<option value="3" <?php if(isset($_POST['searchQuery']) && ($_POST['noOfTravellers'] == '3')) echo 'selected'; ?>>3 Travellers</option>
						<option value="4" <?php if(isset($_POST['searchQuery']) && ($_POST['noOfTravellers'] == '4')) echo 'selected'; ?>>4 Travellers</option>
					</select>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Class : &nbsp;&nbsp;&nbsp;
					<select name="travelClass">
						<option value="economy" <?php if(isset($_POST['searchQuery']) && ($_POST['travelClass'] == 'economy')) echo 'selected'; ?>>Economy</option>
						<option value="business" <?php if(isset($_POST['searchQuery']) && ($_POST['travelClass'] == 'business')) echo 'selected'; ?>>Business</option>
						<option value="firstClass" <?php if(isset($_POST['searchQuery']) && ($_POST['travelClass'] == 'firstClass')) echo 'selected'; ?>>First Class</option>
					</select>
				</p>
				<p>
				<input type="submit" value="Go Set Go" name="searchQuery"/>
				<input type="Reset" value="Reset Search" onclick="window.location = 'flights.php'"/>
				</p>
			</form>
			<?php
				if(isset($_POST['searchQuery'])) {
					if($_POST['fromCity'] != $_POST['toCity']){
						//for validating if fromCity not equal to city
						include("inc_validate.php");
						if(validateDate($_POST['departDate'])){
							//call validateDate function for validating departure date
							if(validateDate($_POST['returnDate'])){
								//call validateDate function for validating return date
								if(compareDates($_POST['departDate'], $_POST['returnDate'])){
									//Include search results for displaying results
									include('inc_searchResults.php');
								}
								else{
									echo "<h2>Error Occured : Return date cannot be less than depature date.</h2>";
								}//end if/else compare dates
							}
							else{
								echo "<h2>Error Occured : Return date cannot be past date.</h2>";
							}//end if/else return date	
						}
						else{
							echo "<h2>Error Occured : Depature date cannot be past date.</h2>";
						}//end if/else depart date	
					}
					else{
						echo "<h2>Error Occured : From city and To city cannot be same.</h2>";
					}//end if fromcity and tocity
				} //end outer if 
			?>
			</div>
		</div>	
	</body>
</html>