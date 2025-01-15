<?php

$a = 7;
$b = 1;

$c = 3;
$d = 4;

// if ($a){
//     echo "There is a";
// }

// else {
//     echo "There is no a";
// }


$result = match($a) {
    1 => "Variable a is 1.",
    2 => "Variable a is 2.",
    default => "Variable is unavailable.",
};

echo $result;