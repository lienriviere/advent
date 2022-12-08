<?php

use AyeIcu\AdventOfCode\Day01\CalorieCounting;

require __DIR__ . '/../../vendor/autoload.php';

$cc = new CalorieCounting(inputData: new SplFileObject(__DIR__ . '/input.txt'));
// Part 1
echo $cc->getElfWithTheMostCalories();

// Part 2
echo $cc->getTop(4)->elvesCarryingTheMostCalories();
