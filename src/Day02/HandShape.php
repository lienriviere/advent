<?php

namespace AyeIcu\AdventOfCode\Day02;

enum HandShape: string
{
    case A = 'Rock';
    case X = 'Rock';

    case B = 'Paper';
    case Y = 'Paper';

    case C = 'Scissors';
    case Z = 'Scissors';
}
