<?php

ini_set("display_errors", 1);
error_reporting (-1); 

require "core/EquationInterface.php";
require "core/LogAbstract.php";
require "core/LogInterface.php";

require "penkin/MyLog.php";
require "penkin/LinearEquationSolver.php";
require "penkin/QuadEquationSolver.php";

$solver = new penkin\QuadEquationSolver();
$logger = penkin\MyLog::Instance();

try {
    $result = $solver->solve(2, 4, 1);
    
    $str = implode(" ", $result);

    $logger::log($str);
} catch(Error $err) {
    $message = $err->getMessage();

    $logger::log($message);
}