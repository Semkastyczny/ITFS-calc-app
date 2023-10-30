<?php

use App\Entity\Calculator;
use App\Form\Type\CalculatorType;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\Test\TypeTestCase;

class CalculatorTestTest extends TypeTestCase
{
    public function testMissingData()
    {
        $formData = [
            'firstNumber' => '',
            'secondNumber' => '',
        ];

        $entity = new Calculator();
        $form = $this->factory->create(CalculatorType::class, $entity);
        
        $expected = new Calculator();
        $expected->setFirstNumber("1");
        $expected->setSecondNumber("2");
        
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertNotEquals($expected, $entity);
    }
}