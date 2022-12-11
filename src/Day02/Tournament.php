<?php

namespace AyeIcu\AdventOfCode\Day02;

class Tournament
{
    public function __construct(
        private array $strategy,
        private ?Player $player1 = null,
        private ?Player $player2 = null,
    ) {}

    public function play()
    {
        foreach ($this->strategy as $round) {

        }
    }

    public function addPlayer(Player $player): void
    {
        $this->player1 ??= $this->player2 ??= $player;
    }

    public function rockPaperScissors()
    {

    }
}