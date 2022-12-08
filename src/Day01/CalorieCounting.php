<?php

namespace AyeIcu\AdventOfCode\Day01;

use \SplFileObject;

class CalorieCounting
{
    public function __construct(
        protected SplFileObject $inputData,
        protected array $elves = [],
        protected int $totalCalories = 0,
        protected ?Elf $fatElf = new Elf,
        private int $top = 3,

    ) {}

    public function count(): int
    {
        $this->parseInputData();
        return (int) $this->totalCalories;
    }

    public function getElfWithTheMostCalories(): string
    {
        $this->getTop(1);
        return $this->listElfFoodCalories($this->fatElf);
    }

    public function getTop(int $numberOfElves)
    {
        $this->parseInputData();
        $this->sortElves()->desc();
        $this->top = $numberOfElves ?? $this->top;
        return $this;
    }

    public function elvesCarryingTheMostCalories(): int
    {
        return $this->sumCalories(function (array $elves) {
            $calories = 0;
            foreach ($elves as $elf) {
                $calories += $elf->totalCalories();
            }
            return $calories;
        }, ...array_slice($this->elves, 0, $this->top, true));
    }

    public function sumCalories(\Closure $resolver, Elf ...$elves): int
    {
        return $resolver($elves);
    }

    protected function listElfFoodCalories(Elf $elf, ?string $name = null): string
    {
        return sprintf(
            'The %s Elf is carrying food with %s Calories, a total of %s Calories.',
            $name ?? $elf->name,
            implode(', ', $elf->calories()),
            number_format($elf->totalCalories())
        ) . PHP_EOL;
    }

    protected function setFattestElf(Elf $elf): void
    {
        if ($elf->totalCalories() > $this->fatElf->totalCalories()) {
            $this->fatElf = $elf;
        }
    }

    protected function parseInputData()
    {
        $elf = new Elf;
        while ($this->inputData->valid()) {
            $calories = trim($this->inputData->current());
            if (!$calories) {
                $this->elves[] = $elf;
                $this->totalCalories = $elf->totalCalories();
                $elf->name = $this->inputData->key();
                $this->setFattestElf($elf);
                $elf = new Elf;
            }
            $elf->addFoodCalories(foodCalories: intval($calories));
            $this->inputData->next();
        }
    }

    public function sortElves()
    {
        usort($this->elves, function ($elf1, $elf2) {
            return $elf1->totalCalories() <=> $elf2->totalCalories();
        });

        return $this;
    }

    public function desc(): void
    {
        $this->elves = array_reverse($this->elves);
    }

}