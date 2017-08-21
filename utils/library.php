<?php

// test variable for even
// test variable for even

// function isEven($var){
// 	if (is_numeric($var) && $var % 2 === 0){
// 		return true;
// 	} else {
// 		return false;
// 	}
// }

//test var for odd
//test var for odd

// function isOdd($var){
// 	if (is_numeric($var) && $var % 2 === 1){
// 		return true;
// 	} else {
// 		return false;
// 	}
// }

// test for vowel
// test for vowel

// function isVowel($var){
// 	if(is_string($var) && count($var) == 1){
// 		$newVar = strtolower($var);
// 		if ($newVar === "a" || $newVar === "e" || $newVar === "i" || $newVar === "o" || $newVar === "u"){
// 			echo "I did it\n";
// 			return true;
			
// 		} else {
// 			return false;
// 		}
// 	} else {
// 		return false;
// 	}
// }

// $var = isVowel("I");
// var_dump($var);

//first element for string or array
//first element for string or array

// function first($input){
// 	if (is_array($input)){
// 		$arrFirst = array_shift($input);
// 		return $arrFirst;
// 	} else if (is_string($input)){
// 		$strFirst = $input[0];
// 		return  $strFirst;
// 	} else {
// 		$response = "Not a string or an array";
// 		echo $response;
// 		return false;
// 	}
// }

//second element for string or array
//second element for string or array

// function second($input){
// 	if (is_array($input)){
// 		$arrSecond = next($input);
// 		return $arrSecond;
// 	} else if (is_string($input)){
// 		$trimmed = $input;
// 		$strFirst = $trimmed[1];
// 		return  $strFirst;
// 	} else {
// 		$response = "Not a string or an array";
// 		echo $response;
// 		return false;
// 	}
// }

// $ans = second([1,2,3]);
// echo $ans .PHP_EOL;

// last element for string or array
// last element for string or array

// function last($input){
// 	if (is_array($input)){
// 		$arrLast = end($input);
// 		return $arrLast;
// 	} else if (is_string($input)){
// 		$trimmed = $input;
// 		$strLast = substr($trimmed,-1);
// 		return  $strLast;
// 	} else {
// 		$response = "Not a string or an array";
// 		echo $response;
// 		return false;
// 	}
// }


// reverse and array or string
// reverse and array or string

// function reverse($input){
// 	if (is_array($input)){
// 		$arrRev = array_reverse($input);
// 		return $arrRev;
// 	} else if (is_string($input)){
// 		$trimmed = $input;
// 		$strRev = strrev($trimmed);
// 		return  $strRev;
// 	} else {
// 		$response = "Not a string or an array";
// 		echo $response;
// 		return false;
// 	}
// }

// $ans = random(false);
// echo $ans . PHP_EOL;

//randomize and pick one element or character
//randomize and pick one element or character

// function random($input){
// 	if (is_array($input)){
// 		$arrRan = array_rand($input);
// 		$random = $input[$arrRan];
// 		return $random;
// 	} else if (is_string($input)){
// 		$trimmed = $input;
// 		$strRan = str_shuffle($trimmed);
// 		return  $strRan[strlen($strRan)];
// 	} else {
// 		$response = "Not a string or an array";
// 		echo $response;
// 		return false;
// 	}
// }

//function to write to any file
//function to write to any file

function append($filename,$stringToWrite){
	$handle = fopen($filename, "a");
	fwrite($handle,$stringToWrite);
	fclose($handle);
}

//function to make user input safe
//function to make user input safe

function safe($string){
	return htmlspecialchars(strip_tags($string));
}

//logout funciton for sessions

function logout(){
	session_unset();
	session_regenerate_id(true);
	session_destroy();
	session_start();
}

//input key exists

function inputHas($key){
	return isset($_REQUEST[$key]);
}

//value at key

function inputGet($key, $default =""){
	if (inputHas($key)){
		return $_REQUEST[$key];
	} else {
		return $default;
	}
}

//escape hacker input

function escape($input){
	if(!is_string($input)){
		return false;
	} else {
		return safe($string);
	}
}

































