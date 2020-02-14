<!DOCTYPE html>
<html>
<head>
	<title>De Tijd</title>
<style>
	#morgenbg{
		background-image: url("afternoon.png");	
	}

	#text{
		width: 1000px;
		height: 100%;
		margin: auto;
		margin-top: 350px;
		text-align: center;
		font-size: 70px;
		font-family: Comic Sans, Comic Sans MS, cursive;
	}

	#tijd{
		width: 1000px;
		height: 100%;
		margin: auto;
		text-align: center;
		font-size: 70px;
		font-family: Comic Sans, Comic Sans MS, cursive;
	}

	body {
		background-image: 
	<?php 
	$x = date("H") <= 6;
	$y = date("H") <= 12;
	$z = date("H") <= 18;
	
	if ($y == true) {
		echo "url(afternoon.png);";  
	} elseif ($x == true) {
    	echo "url(night.png);";
	} elseif ($z == true) {
		echo "url(morning.png);";
	} else {
		echo "url(evening.png);";
	}
	?>
	}
</style>
</head>
<body>

<?php

date_default_timezone_set("Europe/Amsterdam");

if (date("H") <= 6 ) {
    echo "<div id= 'text'><i> Goede nacht! </i></div>";
} elseif (date("H") <= 12) {
	echo "<div id= 'text'><i> Goede morgen! </i></div>";
} elseif (date("H") <= 18) {
	echo "<div id= 'text'><i> Goede middag! </i></div>";
} else {
	echo "<div id= 'avond'><i> Goede avond! </i></div>";
}
	echo "<br>" . "<br>";
	echo "<div id='tijd'> <i>Het is nu " . date('H:i') . "</i></div>" . "<br>";
?>

</body>
</html>
