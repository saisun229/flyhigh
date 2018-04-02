m <!--inc_header.php-->
<div class="header">
	<div class="inline one">
		<h1 style="font-family:Cooper;">FlyHigh.com</h1>
	</div>
	<div class="inline two">
		<?php
			if($_SESSION['name']=="loaded"){
				//Displays login and logout button if user not logged in.
				echo '<button class="button" onclick="window.location.href=' . "'login.php'" . '">Login</button>'; 
				echo '<button class="button" onclick="window.location.href=' . "'register.php'" . '">Sign Up</button>'; 
			}//end if
			if($_SESSION['name']=="loggedIn"){
				//Displays Username and logout button if user logged in.
				echo '<font size="5"><b>  Hello '. $_SESSION['username'] .' !<b></font><br/><button class="button" onclick="window.location.href=' . "'logout.php'" . '">Logout</button>'; 	
			}//end if
		?>
	</div>
	<div class="menu">
		<ul>
			<li><a href="main.php">Home</a></li>
			<li><a href="flights.php">Search Flights</a></li>
			<li><a href="history.php">Booking History</a></li>
			<li><a href="contactUs.php">Contact Us</a></li>
		</ul>
	</div>
</div>