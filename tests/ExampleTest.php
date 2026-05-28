<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{

    /**
     * @test
     */
    public function givenNormalNumberReturnsNumber()
    {
        $fizz = new FizzBuzz();

        $res = $fizz->evaluate(1);

        $this->assertEquals("1", $res);
    }


}
