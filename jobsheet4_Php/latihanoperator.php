<?php

$totalSeats = 45;
$occupiedSeats = 28;


$emptySeats = $totalSeats - $occupiedSeats;
$percentageEmpty = ($emptySeats / $totalSeats) * 100;

echo "<h1>Percentage of Empty Seats</h1>";
echo "<p>Total Seats: $totalSeats</p>";
echo "<p>Occupied Seats: $occupiedSeats</p>";
echo "<p>Empty Seats: $emptySeats</p>";
echo "<p>Percentage of Empty Seats: " . number_format($percentageEmpty, 2) . "%</p>";
?>
