<?php

function palindrome($n) {
    $number = $n;
    $sum = 0;

    $newNum = strrev($number) . '</br>';
    while (floor($number)) {
        $rem = $number % 10;
        $sum = $sum * 10 + $rem;
        $number = $number / 10;
    }
    return $sum;
}

$input = 1235321;
$num = palindrome($input);
if ($input == $num) {
    echo "$input is a Palindrome number";
} else {
    echo "$input is not a Palindrome";
}

function is_palindrome($num1, $num2) {
    $num1 = strval($num1);
    $num2 = strval($num2);
    if ($num1 == strrev($num1) && $num2 == strrev($num2)) {
        return true;
    }
    return false;
}

if (is_palindrome(12321, 56765)) {
    echo "The numbers are palindrome.";
} else {
    echo "The numbers are not palindrome.";
}

function isPalidromString($str) {
    return join(array_reverse(str_split($str)));
}

$strTocheck = 'acca';
$checkPali = isPalidromString('acca');

if ($strTocheck == $checkPali) {
    echo "String is palindrom";
} else {
    echo "Str is not palidrom";
}
