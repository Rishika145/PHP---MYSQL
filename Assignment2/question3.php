<?php
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^a-z0-9]/', '', $string));
    return $string === strrev($string);
}

$testString = "Madam";
if (isPalindrome($testString)) {
    echo "\"$testString\" is a palindrome.";
} else {
    echo "\"$testString\" is not a palindrome.";
}
?>