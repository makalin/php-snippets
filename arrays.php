<?php
// Filter, map, and reduce example
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$evenNumbers = array_filter($numbers, fn($n) => $n % 2 == 0);
$squaredNumbers = array_map(fn($n) => $n * $n, $numbers);
$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item, 0);