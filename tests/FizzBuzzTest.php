<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{

    /**
     * @test
     */
    public function givenNormalNumberReturnsNumber()
    {
        $fizz = new FizzBuzz();

        $res = $fizz->evaluate("1");

        $this->assertEquals("1", $res);
    }

    /**
     * @test
     */
    public function GivenNumberDivisibleBy3ReturnsFizz()
    {
        $fizz = new FizzBuzz();

        $res = $fizz->evaluate("3");

        $this->assertEquals("Fizz", $res);
    }

    /**
     * @test
     */
    public function givenNumberDivisibleBy5ReturnsBuzz()
    {
        $fizz = new FizzBuzz();

        $res = $fizz->evaluate("5");

        $this->assertEquals("Buzz", $res);
    }

    /**
     * @test
     */
    public function givenNumberDivisibleBy3and5RetunsFizzBuzz()
    {
        $fizz = new FizzBuzz();

        $res = $fizz->evaluate("15");

        $this->assertEquals("FizzBuzz", $res);
    }


}
