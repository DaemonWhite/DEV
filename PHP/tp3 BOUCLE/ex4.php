<?php

$n=1;
$offset=2;


for ($i=0; $i < 100; $i++) { 
    echo $i + 1 . " : " . $n . PHP_EOL;
    $n = $n + $offset;
}