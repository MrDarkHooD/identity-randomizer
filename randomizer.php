<?php
$names = explode("|", file_get_contents('names.txt'));
$surnames = explode("|", file_get_contents('surnames.txt'));
$machines = explode("|", file_get_contents('machines.txt'));

$count = count($names) -1;
$machines_count = count($machines) - 1;
$surnames_count = count($surnames) - 1;
$rand = rand(0, $machines_count);
$rand2 = rand(0, $count);
$rand3 = rand(0, $surnames_count);

$firstname = $names[$rand2];
$surname = $surnames[$rand3];

	echo $firstname;

$check = str_split($firstname);

		if(end($check) == "s") { echo "'"; }else { echo "'s"; }

	echo " " . $machines[$rand] . "<br>" . $firstname . " " . $surname . "<br>";

$vocals = str_split("aeiouy");
$consonants = str_split("bcdfghjklmnpqrstvwxz");

		function random_thing($type = "a", $upper = 0) {
		$vocals = str_split("aeiouy");
		$consonants = str_split("bcdfghjklmnpqrstvwxz");
		$alphabets = str_split("abcdefghijklmnopqrstuvwxyz");

				if($type == "a") $string = $alphabets;
				if($type == "v") $string = $vocals;
				if($type == "k") $string = $consonants;

		$count = count($string) - 1;
		$rand = rand(0, $count);	
		$return = $string[$rand];
				if($upper) $return = strtoupper($return);
			return $return;

		}

$letter1 = random_thing("a", 1);
$letter2 = random_thing("a");
$letter3 = random_thing("a");
$letter4 = random_thing("a");
$letter5 = random_thing("a");

		if(in_array($letter3, $consonants)) { $letter4 = random_thing("v"); }
		if(in_array(strtolower($letter1), $consonants)) { $letter2 = random_thing("v"); }

	echo $letter1 . $letter2 . $letter3 . $letter4 . $letter5;

?>


$letter1 = random_thing("a", 1);
$letter2 = random_thing("a");
$letter3 = random_thing("a");
$letter4 = random_thing("a");
$letter5 = random_thing("a");

if(in_array($letter3, $consonants)) { $letter4 = random_thing("v"); }
if(in_array(strtolower($letter1), $consonants)) { $letter2 = random_thing("v"); }


echo $letter1 . $letter2 . $letter3 . $letter4 . $letter5;

?>


$letter1 = random_thing("a", 1);
$letter2 = random_thing("a");
$letter3 = random_thing("a");
$letter4 = random_thing("a");
$letter5 = random_thing("a");

if(in_array($letter3, $konsonantit)) { $letter4 = random_thing("v"); }
if(in_array(strtolower($letter1), $konsonantit)) { $letter2 = random_thing("v"); }


echo $letter1 . $letter2 . $letter3 . $letter4 . $letter5;

?>
