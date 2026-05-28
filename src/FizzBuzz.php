<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    public function evaluate(string $number):string{

        if($this->divisibleBy3and5($number)){
            return "FizzBuzz";
        }

        if($this->divisibleBy3($number)){
            return "Fizz";
        }

        if($this->divisibleBy5($number)){
            return "Buzz";
        }

        else{
            return $number;
        }
    }

    private function divisibleBy3and5(string $number):bool{
        return (((intval($number) % 3) == 0) and ((intval($number) % 5) == 0));
    }

    private function divisibleBy3(string $number):bool{
        return ((intval($number) % 3) == 0);
    }

    private function divisibleBy5(string $number):bool{
        return ((intval($number) % 5) == 0);
    }
}