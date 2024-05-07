<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Calculator;

$calculator = new Calculator();
echo $calculator->isEven(5);
