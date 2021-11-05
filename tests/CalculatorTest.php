<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator;
        $result = $calculator->add(5, 2);

        $this->assertEquals(7, $result);
    }

    public function testSubtract()
    {
        $calculator = new Calculator;
        $result = $calculator->subtract(60, 50);

        $this->assertEquals(10, $result);
    }

    public function testMultiply()
    {
        $calculator = new Calculator;
        $result = $calculator->multiply(5, 2);

        $this->assertEquals(10, $result);
    }

    public function testDivide()
    {
        $calculator = new Calculator;
        $result = $calculator->divide(9, 3);

        $this->assertEquals(3, $result);
    }
}
