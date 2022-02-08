<?php

// 1.1 An evil clown

$emoticons = [":‑)", ":)", ":-]", ":->", ":>", "8-)", "8)", ":-}", ":}", ":o)", ":c)", ":^)", "=]", "=)"];
// var_export($emoticons);

foreach($emoticons as $row)
{
    $row = str_replace(array(')', ')'), '', $row);
    if($row[0] == ")"){
        $row[0] = "";
    }

    var_export($row);
}
