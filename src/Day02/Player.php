<?php

namespace AyeIcu\AdventOfCode\Day02;

final class Player
{
    
    public function __construct(
        public string $name,
        public int $points = 0,
        public int $roundsWon = 0,
    ) {}
}
