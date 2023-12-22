<?php

$str = "Hello world";
echo "string: " . $str . "\n";
echo "length: " . strlen($str) . "\n"; // 11
echo "word count: " . str_word_count($str) . "\n";
echo "reverse: " . strrev($str) . "\n";
echo "letter position: " . strpos($str, "r") . "\n";
echo "word replace: " . str_replace("world", "Paaku", $str) . "\n";
echo "Lower case: " . strtolower($str) . "\n";
echo "Upper case: " . strtoupper($str) . "\n";
echo "Upper case first: " . ucfirst($str) . "\n";
echo "lower case first: " . lcfirst($str) . "\n";
echo "Upper case Words: " . ucwords($str) . "\n";
