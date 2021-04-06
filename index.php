<?php

ini_set("display_errors", 1);
error_reporting (-1); 

require "vendor/autoload.php";

use penkin\MyLog;

$solver = new penkin\QuadEquationSolver();

try {
    MyLog::log("Program version " . trim(file_get_contents("version")) . "\n\r");
    echo "Enter 3 numbers: a, b, c.\n\r";

    $a = readline("Enter a: \n\r");
    $b = readline("Enter b: \n\r");
    $c = readline("Enter c: \n\r");

    $equation = "x=".$a."x2+".$b."x+".$c;
    MyLog::log("Equation is ".$equation."\n\r");

    $result = $solver->solve($a, $b, $c);
    
    $str = implode(" ", $result);
    
    $string = "Equation roots: ";
    MyLog::log($string.$str."\n\r");
} catch(penkin\PenkinException $err) {
    $message = $err->getMessage();

    MyLog::log($message);
}

MyLog::write();