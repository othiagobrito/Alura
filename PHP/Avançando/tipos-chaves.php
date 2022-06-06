<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $key => $value) {
    echo $value . PHP_EOL;
}

?>