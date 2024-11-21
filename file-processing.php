<?php
// Read file and process lines
$processFile = function($filename, $processor) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    return array_map($processor, $lines);
};

// Example usage
$uppercaseLines = $processFile('example.txt', 'strtoupper');
$lineLengths = $processFile('example.txt', 'strlen');