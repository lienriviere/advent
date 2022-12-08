<?php

namespace AyeIcu\AdventOfCode\Day01;

class Elf
{
    public function __construct(
        protected array $calories = [],
        public string $name = '',
    ){}

    public function addFoodCalories(int $foodCalories): void
    {
        if ($foodCalories === 0) {
            return;
        }
        
        $this->calories[] = $foodCalories;
    }

    public function totalCalories(): int
    {
        return array_sum($this->calories);
    }

    public function calories(): array
    {
        return $this->calories;
    }
}