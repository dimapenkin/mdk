<?php

ini_set("display_errors", 1);
error_reporting (-1); 

require "core/EquationInterface.php";
require "core/LogAbstract.php";
require "core/LogInterface.php";

require "penkin/PenkinException.php";
require "penkin/MyLog.php";
require "penkin/LinearEquationSolver.php";
require "penkin/QuadEquationSolver.php";

$solver = new penkin\QuadEquationSolver();
$logger = penkin\MyLog::Instance();

try {
    echo "Enter 3 numbers: a, b, c.\n\r";

    $a = readline("Enter a: \n\r");
    $b = readline("Enter b: \n\r");
    $c = readline("Enter c: \n\r");

    $equation = "x=".$a."x2+".$b."x+".$c;
    penkin\MyLog::log("Equation is ".$equation."\n\r");

    $result = $solver->solve($a, $b, $c);
    
    $str = implode(" ", $result);
    
    $string = "Equation roots: ";
    $logger::log($string.$str."\n\r");
} catch(penkin\PenkinException $err) {
    $message = $err->getMessage();

    $logger::log($message);
}

$logger::write();