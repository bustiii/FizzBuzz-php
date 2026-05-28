<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    public function evaluate(string $number):string{
        if((intval($number) % 3) == 0){
            return "Fizz";
        }
        else{
            return $number;
        }
    }

}