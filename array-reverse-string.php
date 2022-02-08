<?php

// 2.1 Reverse a string with functionality like strrev()

$string = 'This is a string';
$stringLength = strlen($string);
$stringToArray = str_split($string);

   for($i = $stringLength -1; $i >=0; $i--)
   {
   echo $stringToArray[$i];
   }
   echo "It didn't work, well, shit happens((";
