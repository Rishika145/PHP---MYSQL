<?php
// a. Concatenation
$str1 = "Hello";
$str2 = "World";
echo $str1 . " " . $str2 . "<br>";

// b. String Length
echo "Length: " . strlen($str1) . "<br>";

// c. Substring Extraction
echo "Substring: " . substr($str1, 1, 3) . "<br>";

// d. Case Conversions
echo "Uppercase: " . strtoupper($str1) . "<br>";
echo "Lowercase: " . strtolower($str1) . "<br>";
echo "Uppercase First Letter: " . ucfirst($str2) . "<br>";
echo "Uppercase Words: " . ucwords("hello world") . "<br>";

// e. Trimming
$str3 = "  Extra Spaces  ";
echo "Trimmed: '" . trim($str3) . "'<br>";
echo "Left Trimmed: '" . ltrim($str3) . "'<br>";
echo "Right Trimmed: '" . rtrim($str3) . "'<br>";

// f. Reverse a String
echo "Reversed: " . strrev($str1) . "<br>";

// g. Compare Strings (Case-Sensitive)
echo "Comparison (Case-Sensitive): " . strcmp("Hello", "hello") . "<br>";

// h. Compare Strings (Case-Insensitive)
echo "Comparison (Case-Insensitive): " . strcasecmp("Hello", "hello")."<br>";




// a. Arithmetic Operations
$num1 = 10;
$num2 = 3;
echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br>";
echo "Modulus: " . ($num1 % $num2) . "<br>";

// b. Round Up
echo "Round Up: " . ceil(4.2) . "<br>";

// c. Round Down
echo "Round Down: " . floor(4.8) . "<br>";

// d. Square Root
echo "Square Root: " . sqrt(16) . "<br>";

// e. Random Number
$min = 1;
$max = 100;
echo "Random Number: " . rand($min, $max) . "<br>";

// f. Check if Numeric
$value = "123";
echo "Is Numeric: " . (is_numeric($value) ? "Yes" : "No")."<br>";
?>