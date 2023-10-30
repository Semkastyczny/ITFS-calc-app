<?php

use App\Entity\Calculator as EntityCalculator;
use App\Services\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testSum()
    {
        $calculator = new Calculator();

        $entity = new EntityCalculator();
        $entity->setFirstNumber("5");
        $entity->setSecondNumber("5");
        $entity->setOperation("sum");
        $result = $calculator->calculate($entity);

        $this->assertEquals("10", $result->result);
        $this->assertEquals(false, $result->error);
    }

    public function testDifference()
    {
        $calculator = new Calculator();

        $entity = new EntityCalculator();
        $entity->setFirstNumber("7");
        $entity->setSecondNumber("5");
        $entity->setOperation("difference");
        $result = $calculator->calculate($entity);

        $this->assertEquals("2", $result->result);
        $this->assertEquals(false, $result->error);
    }


    public function testProduct()
    {
        $calculator = new Calculator();

        $entity = new EntityCalculator();
        $entity->setFirstNumber("5");
        $entity->setSecondNumber("5");
        $entity->setOperation("product");
        $result = $calculator->calculate($entity);

        $this->assertEquals("25", $result->result);
        $this->assertEquals(false, $result->error);
    }

    public function testQuotient()
    {
        $calculator = new Calculator();

        $entity = new EntityCalculator();
        $entity->setFirstNumber("5");
        $entity->setSecondNumber("5");
        $entity->setOperation("quotient");
        $result = $calculator->calculate($entity);

        $this->assertEquals("1", $result->result);
        $this->assertEquals(false, $result->error);
    }
}