<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);

// Assignment Begins

// 2)
	echo "<br><br>";
	$date = str_replace("-", "/", $date);
	echo "2) \$date with - replaced with " .$date;
	echo "<br>";
// 3)
	echo "3) \$date compared to \$tar: ";
	if (strnatcmp($date, $tar) > 0) {
		echo "The Future";
	}
	elseif (strnatcmp($date, $tar) < 0) {
		echo "The Past";
	}
	elseif (strnatcmp($date, $tar) == 0) {
		echo "Oops";
	}
	echo "<br>";
// 4)
	echo "4) Positions of \"/\" in \$date: ";
	for ($i = 0; $i < strlen($date); $i++){
		if (substr($date, $i, 1) == "/"){
			echo $i. " ";
		}
	}
	echo "<br>";
// 5)
	echo "5) Number of Words in \$date: ";
	$explode = explode("/", $date);
	echo count($explode);
	echo "<br>";
// 6)
	echo "6) Length of \$date String: ".strlen($date);
	echo "<br>";
// 7) 
	echo "7) ASCII value of first char in \$date string: ";
	echo ord($date);
	echo "<br>";
// 8) 
	echo "8) Last two Chars in \$date: ";
	echo substr($date, -2);
	echo "<br>";
// 9) 
	echo "9) Date Array: ";
	foreach ($explode as $dateseg) {
		echo $dateseg." ";
	}
	echo "<br>";
// 10)
	echo "10) Leap Years<br>";
	$is_leap_year = false;
	foreach ($year as $yr) {
		$yr = (int)$yr;
		if ($yr % 4 == 0) {
			if ($yr % 100 == 0) {
				if ($yr % 400 == 0) {
					$is_leap_year = true;
				}
				else {
					$is_leap_year = false;
				}
			}
			else {
				$is_leap_year = true;
			}
		}
		else {
			$is_leap_year = false;
		}
		echo $yr. ": ";
		echo $is_leap_year ? 'True' : 'False'; 
		echo " | ";
	}

?>