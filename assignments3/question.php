<?php
$filename = "students.txt";

// Writing to the file
$students = ["Alice", "Bob", "Charlie", "David"];
$file = fopen($filename, "w");
foreach ($students as $student) {
    fwrite($file, $student . PHP_EOL);
}
fclose($file);

// Reading and displaying the file content
echo "<h3>List of Students:</h3>";
$file = fopen($filename, "r");
while (($line = fgets($file)) !== false) {
    echo htmlspecialchars($line) . "<br>";
}
fclose($file);
?>