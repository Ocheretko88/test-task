<?php

// 2.3 The sum of all array elements

$array = [1, 2, 3];
$sum = 0;
foreach($array as $key=>$value)
{
    $sum += $value;
}
echo $sum;
