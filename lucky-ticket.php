<?php

// 1.2 Lucky ticket number

$number = '123321';
$array  = array_map('intval', str_split($number));
// var_export($array);

$arrayChunk = array_chunk($array, 3);
$sumLeft = array_sum($arrayChunk[0]);
$sumRight = array_sum($arrayChunk[1]);

   if ($sumLeft === $sumRight)
   {
       echo 'This is a Lucky number!';
   }
   if ($sumLeft !== $sumRight)
       {
           echo 'This is not a lucky number.';
       }

