<?php
// Class Description: to present the arithmetic progression
// Author: Rana Albedaiwi
// Date : 6/19/2024

 class RecursiveFactorial
{

    //Returing the computaion of the facorial number using the recursive way 
    public function Factorial($number)
    {
        if($number<=1)
        return 1;
        return $number*$this->Factorial($number-1);

    }

}



?>