<?php

class A
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

class B extends A
{
    # Function for finding discriminant
    protected function discriminant($a, $b, $c)
    {
        return ($b * $b) - (4 * $a * $c);
    }

    public function solveQuadEquation($a, $b, $c)
    {
        if ($a == 0) {
            return $this->solveLinearEquation($b, $c);
        }

        $d = $this->discriminant($a, $b, $c);

        if ($d == 0) {
            return $this->x = [(-$b) / (2 * $a)];
        }

        if ($d < 0) {
            throw new \Error("Equation does not exist");
        }

        return $this->x = [((-$b) + sqrt($d)) / (2 * $a), ((-$b) - sqrt($d)) / (2 * $a)];
    }
}