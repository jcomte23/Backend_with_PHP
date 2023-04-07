<?php

namespace App;

class Calculator
{
    public function add(int $_number,int $_number2):int
    {
        $sum=$_number+$_number2;
        return $sum;
    }

    public function rest(int $_number,int $_number2):int
    {
        $sum=$_number-$_number2;
        return $sum;
    }

    public function mult(int $_number,int $_number2):int
    {
        $sum=$_number*$_number2;
        return $sum;
    }

    public function div(int $_number,int $_number2):int
    {
        $sum=$_number/$_number2;
        return $sum;
    }
}
