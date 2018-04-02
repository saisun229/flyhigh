<?php
	
	
	
	//Variable to hold sessionId:
	$starter = session_id();
	
	//Start session if sessionId is empty:
	if(empty($starter)){
		session_start();
		if(count($_SESSION)==0){
			$_SESSION['name'] = "loaded";
			$_SESSION['username'] = NULL;
		}//end inner if
	}//end outer if
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>FlyHigh.com</title>
		<link rel="stylesheet" type="text/css" href="flyHigh.css">
	</head>
	<body>	
		<?php
			include('inc_header.php');
		?>
		<div class= "content">
			<h2>Hyderabad</h2>
			<p style="font-size:20px; text-align:justify;"><img class="img" src="hyd.jpg" alt="Hyderabad" height="150" width="150" hspace="15">
				The city of smiles, of lights, of a thousand faces, endearingly called the Pearl City, Hyderabad offers a variety of tourist attractions ranging from Heritage monuments, Lakes and Parks, Gardens and Resorts, Museums to delectable cuisine and a delightful shopping experience. To the traveller, Hyderabad offers a fascinating panorama of the past, with a richly mixed cultural and historical tradition spanning 400 colourful years. The Charminar is the signature of Hyderabad. Mohammed Quli Qutb Shah, the founder of Hyderabad, built Charminar in 1591 at the centre of the original city layout. It is said to be built as a charm to ward off a deadly epidemic raging at that time. Four graceful minarets soar to a height of 48.7 m above the ground. Charminar has 45 prayer spaces and a mosque in it. Visitors can also view the architectural splendour inside the Charminar. 
			</p>
			<button style="float:right; margin-right: 30px;" class="button" onclick="window.location.href='flights.php'" value="hyderabad">Book Now</button> 
			<br/><br/>
			<h2>Chennai</h2>
			<p style="font-size:20px; text-align:justify;"><img class="img" src="che.jpg" alt="Chennai" height="150" width="150" hspace="15">
				Chennai or Madras as it was called before, on the Coromandel Coast, is the capital city of Tamil Nadu, a State of the Indian Sub continent. It is a major industrial, commercial, cultural, economic and educational centre of the Southern India. Beautiful Beaches, One day leisure outlets, Modern Sea Port and Airport, Long and beautiful Highways, Convenient multi-Transport system, Theme parks, Industrial cities, Hi –Tech software silicon valley parks, Sophisticated Multi Speciality Hospitals, World Class Universities, High Rise Business and Residential complexes are the present days outlook of the great Chennai, most sought after by the people of all walks of life from all parts of the world. The Marina Beach is the signature of Chennai A beautiful and mesmerizing 13 km stretch of beach from Fort St.George to the north of Besant Nagar. This is the second longest of the beaches of the world.
			</p>
			<button style="float:right; margin-right: 30px;" class="button" onclick="window.location.href='flights.php'" value="chennai">Book Now</button> 
			<br/><br/>
			<h2>Delhi</h2>
			<p style="font-size:20px; text-align:justify;"><img class="img" src="del.jpg" alt="Delhi" height="150" width="150" hspace="15">
				Delhi tourism comprises of a city with deep history, invaluable monuments, and landmark of love, empires, religion and sacrifices. The state is formed by combination of two distant but unanimous fragments the old Delhi and New Delhi which reflects the past and the contemporary style.The multi-faceted city attracts many tourists around the year so the Government of Delhi has framed a separate Ministry to sustain the tourism in Delhi. Even though it is the second-most populated city in India and eighth globally, Delhi tourism hasn’t suffered any noticeable dent. The India Gate is a monument of great national and historical significance, it bears tribute to all the Indian soldiers who laid down their lives for their country. The Red Fort is made completely out of red-stone, this beautiful monument has been declared as a World Heritage site. On the eve of Independence Day, the Prime Minister addresses the nation from the ramparts of the fort.
			</p>
			<button style="float:right; margin-right: 30px;" class="button" onclick="window.location.href='flights.php'" value="chennai">Book Now</button> 
			<br/><br/>
		</div>
	</body>
</html>