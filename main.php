<?php
// Class Description: to present the recursive factorial
// Author: Rana Albedaiwi
// Date : 6/19/2024
require_once 'RecursiveFactorial.php';

// Initialization of the recursive factorial object
$factorial = new RecursiveFactorial();
// Presenting the recursive factorial of different inputs
echo "The reslut of 5!: ". $factorial->Factorial(5)."\n";
echo "The reslut of 1!: ". $factorial->Factorial(1)."\n";
echo "The reslut of 0!: ". $factorial->Factorial(0);

?>