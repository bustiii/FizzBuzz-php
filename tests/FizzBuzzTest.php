<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizz;
    protected function setUp():void
    {
        $this->fizz = new FizzBuzz;
    }


    /**
     * @test
     */
    public function givenNormalNumberReturnsNumber()
    {
        $res = $this->fizz->evaluate("1");

        $this->assertEquals("1", $res);
    }

    /**
     * @test
     */
    public function GivenNumberDivisibleBy3ReturnsFizz()
    {
        $res = $this->fizz->evaluate("3");

        $this->assertEquals("Fizz", $res);
    }

    /**
     * @test
     */
    public function givenNumberDivisibleBy5ReturnsBuzz()
    {
        $res = $this->fizz->evaluate("5");

        $this->assertEquals("Buzz", $res);
    }

    /**
     * @test
     */
    public function givenNumberDivisibleBy3and5RetunsFizzBuzz()
    {
        $res = $this->fizz->evaluate("15");

        $this->assertEquals("FizzBuzz", $res);
    }


}
