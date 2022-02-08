<?php

// 2.4 Mirror Letters

$string = 'ABCD EFGHI GKLMN OPQRS TUVWX YZ';
$string = strtr($string, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'ZYXWVUTSRQPONMLKJIHGFEDCBA');

echo $string;

