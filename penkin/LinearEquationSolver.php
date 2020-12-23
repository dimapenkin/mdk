<?php

namespace penkin;

class LinearEquationSolver
{
    protected $x;

    public function solveLinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new Error("Variable a cannot be empty\n\r");
        }

        return $this->x = [($b * -1) / $a];
    }
}