<?php

namespace penkin;

use core\EquationInterface;

class QuadEquationSolver extends LinearEquationSolver implements EquationInterface
{
    # Function for finding discriminant
    protected function discriminant($a, $b, $c)
    {
        return ($b * $b) - (4 * $a * $c);
    }

    public function solve($a, $b, $c)
    {
        if ($a == 0 && $b == 0 && $c == 0) {
            throw new PenkinException("Equation does not exist.\n\r");
        }

        if ($a == 0) {
            return $this->solveLinearEquation($b, $c);
        }
        MyLog::log("It is a quad equation.\n\r");
        $d = $this->discriminant($a, $b, $c);

        if ($d == 0) {
            return $this->x = [(-$b)/ (2 * $a)];
        }

        if ($d < 0) {
            throw new PenkinException("Equation does not exist\n\r");
        }

        return $this->x = [((-$b) + sqrt($d)) / (2 * $a), ((-$b) - sqrt($d)) / (2 * $a)];
    }
}