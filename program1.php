<?php

//Write a PHP program to create a new string taking the first 3 characters of a given string and return the string with the 3 characters added at both the front and back.
//If the given string length is less than 3, use whatever characters are there


function updateString($str) {
    if (strlen($str) < 3) {
        return $str . $str . $str;
    } else {
        $front = substr($str, 0, 3);
        return $front . $str . $front;
    }
}

echo updateString('Python') . "\n";
echo updateString('JS') . "\n";
echo updateString('Code') . "\n";

//12. Write a PHP program to check if a given string starts with 'C#' or not.

function checkStringStartwith($str) {
    //return strpos($str, "C#") === 0;
    return (strlen($str) < 3 && substr($str, 0, 2) == "C#" || substr($str, 0, 2) == "C#" && substr($str, 2, 1) == ' ');
}

echo checkStringStartwith('C# Sharp') . "\n";

echo checkStringStartwith('C#') . "\n";
echo checkStringStartwith('C') . "\n";

//Write a PHP program to check if one given temperatures is less than 0 and the other is greater than 100.

function checkTempurature($temp1, $temp2) {
    return ($temp1 < 0 && $temp2 > 100 || $temp1 > 100 && $temp2 < 0) ? true : false;
}

var_dump(checkTempurature(120, -1)) . "\n";
var_dump(checkTempurature(-1, 120)) . "\n";
var_dump(checkTempurature(2, 120)) . "\n";

//Write a PHP program to check two given integers whether either of them is in the range 100..200 inclusive.

function checkRange($min, $max) {
    return ($min >= 100 && $min < 200 || $max >= 100 && $max < 200) ? true : false;
}

echo checkRange(100, 199) . "\n";
echo checkRange(250, 300) . "\n";
echo checkRange(105, 190) . "\n";

//Write a PHP program to check whether three given integer values are in the range 20..50 inclusive. 
//Return true if 1 or more of them are in the said range otherwise false.

function valueRange($n1, $n2, $n3) {

    return ($n1 >= 20 && $n1 <= 50) || ($n2 >= 20 && $n2 <= 50) || ($n3 >= 20 && $n3 <= 50);
}

var_dump(valueRange(11, 15, 12)) . "\n";
var_dump(valueRange(30, 30, 17)) . "\n";
var_dump(valueRange(25, 35, 50)) . "\n";
var_dump(valueRange(25, 35, 50)) . "\n";

//Write a PHP program to check whether two given integer values are in the range 20..50 inclusive.
//// Return true if 1 or other is in the said range otherwise false.

function twoNumvalueRange($n1, $n2) {

    return ($n1 >= 20 && $n1 <= 50) || ($n2 >= 20 && $n2 <= 50);
}

echo twoNumvalueRange(20, 84) . "\n";
echo twoNumvalueRange(14, 50) . "\n";
echo twoNumvalueRange(11, 45) . "\n";
echo twoNumvalueRange(25, 40) . "\n";

//Write a PHP program to check if a string 'yt' appears at index 1 in a given string.
// If it appears return a string without 'yt' otherwise return the original string.


function checkString($str) {
    return (substr($str, 1, 2)) == "yt" ? substr($str, 0, 1) . substr($str, 3, strlen($str) - 2) : $str;
}

echo checkString('Python') . "\n";
echo checkString('ytade') . "\n";
echo checkString('jsues') . "\n";

//Write a PHP program to check the largest number among three given integers.


function findLargeNumber($n1, $n2, $n3) {
    if ($n1 > $n2 && $n1 > $n3) {
        echo $n1;
    } else if ($n2 > $n1 && $n2 > $n3) {
        echo $n2;
    } else {
        echo $n3;
    }
}

echo findLargeNumber(1, 2, 3) . '</br>';
echo findLargeNumber(1, 3, 2) . '</br>';
echo findLargeNumber(1, 1, 1) . '</br>';
echo findLargeNumber(1, 2, 2) . '</br>';

//Write a PHP program to check which number nearest to the value 100 among two given integers
//. Return 0 if the two numbers are equal
function findNearest($n1, $n2) {
    if ($n1 == $n2) {
        echo 0;
    } else if ($n1 > $n2) {
        echo $n1;
    } else {
        echo $n2;
    }
}

findNearest(78, 95) . '</br>';
findNearest(95, 95) . '</br>';
findNearest(99, 70) . '</br>';

//Write a PHP program to check whether two given integers are in the range 40..50 inclusive, 
////or they are both in the range 50..60 inclusive.

function findInRange($x, $y) {
    return ($x >= 40 && $x <= 50 && $y >= 40 && $y <= 50) || ($x >= 50 && $x <= 60 && $y >= 50 && $y <= 60);
}

var_dump(findInRange(78, 95)) . "\n";
var_dump(findInRange(25, 35)) . "\n";
var_dump(findInRange(40, 50)) . "\n";
var_dump(findInRange(55, 60)) . "\n";
