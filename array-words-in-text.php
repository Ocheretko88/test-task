<?php

// 2.2 Words in text -> array where words are keys

$textFile = file_get_contents('text.txt');
$newTextFile = strtolower(trim(preg_replace("/[^\p{L}|\p{N}]+/u", " ", $textFile)));
$array = explode(' ', $newTextFile);
print_r(array_count_values($array));
