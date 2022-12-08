<?php

namespace AyeIcu\AdventOfCode\Day02;

enum HandShape: int
{
    case Rock = 1;
    case Paper = 2;
    case Scissors = 3;

    public function points(): int
    {
        return match($this) {
            HandShape::Rock => 1,
            HandShape::Paper => 2,
            HandShape::Scissors => 3,
        };
    }

    public static function shape($l): static
    {
        return match($l) {
            'A', 'X' => static::Rock,
            'B', 'Y' => static::Paper,
            'C', 'Z' => static::Scissors,
        };
    }
}
