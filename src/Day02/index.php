<?php

require __DIR__ . '/../../vendor/autoload.php';

use AyeIcu\AdventOfCode\Day02\StrategyGuide;
use AyeIcu\AdventOfCode\Day02\Tournament;
use AyeIcu\AdventOfCode\Day02\Player;

$tour = new Tournament(
   strategy: new StrategyGuide(
        file(__DIR__ . '/input.txt')
   ),
   player1: new Player(name: 'Opponent'),
   player2: new Player(name: 'You'),
);

$tour->play();