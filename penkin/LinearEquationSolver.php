<?php

namespace penkin;

class LinearEquationSolver
{
    protected $x;

    public function solveLinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new PenkinException("Equation does not exist.\n\r");
        }

        MyLog::log("It is a linear equation.\n\r");

        return $this->x = [($b * -1) / $a];
    }
}