<?php

$appBaseDir = __DIR__ . '/../src/';

if (!file_exists($appBaseDir)) {
    echo 'creating src directory' . PHP_EOL;
    mkdir($appBaseDir);
} else {
    echo 'src directory exists' . PHP_EOL;
}

$adventDays = 25;

for ($i = 1; $i <= $adventDays; $i++) {
    chdir($appBaseDir);
    $dayDir = sprintf('Day%02d', $i);
    if (!file_exists($dayDir)) {
        mkdir($dayDir);
    }
}