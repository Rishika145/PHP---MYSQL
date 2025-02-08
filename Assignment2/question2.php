<?php
$cities = [
    "City1" => 1200000,
    "City2" => 950000,
    "City3" => 1500000
];

$highestPopulationCity = array_keys($cities,
max($cities))[0];
echo "The city with the highest population is: 
$highestPopulationCity";
?>