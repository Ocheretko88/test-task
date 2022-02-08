<?php

// 2.5 Unique words

function getUniqueWords(string $text)
{
$newTextFile = strtolower(trim(preg_replace("/[^\p{L}|\p{N}]+/u", " ", $text)));
$array = explode(' ', $newTextFile);
return array_unique($array);
}
$text = "When PHP parses a file, it looks for opening and closing tags, which are <?php and ?> which tell PHP to start and stop interpreting the code between them. Parsing in this manner allows PHP to be embedded in all sorts of different documents, as everything outside of a pair of opening and closing tags is ignored by the PHP parser.";

print_r(getUniqueWords($text));

