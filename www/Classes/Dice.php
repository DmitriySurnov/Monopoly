<?php

namespace Classes;

use Random\Randomizer;

class Dice
{
    private int $_value = 0;

    public function ThrowDice(): void
    {
        $randomizer = new Randomizer();
        $this->_value =$randomizer ->getInt(1,6);
    }

    public function getValue(): int
    {
        if ($this->_value == 0)
            $this->ThrowDice();
        return $this->_value;
    }
}