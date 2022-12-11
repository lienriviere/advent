<?php

namespace AyeIcu\AdventOfCode\Day02;

enum HandShapePoints: int
{
    case Rock = 1;
    case Paper = 2;
    case Scissors = 3;

    public function points(): int
    {
        return match($this) {
            HandShapePoints::Rock => 1,
            HandShapePoints::Paper => 2,
            HandShapePoints::Scissors => 3,
        };
    }

}
