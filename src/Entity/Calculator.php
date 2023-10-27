<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Calculator
{

    public CONST OPERATIONS = ['sum', 'difference', 'product', 'quotient'];

    protected $firstNumber;

    protected $secondNumber;
    
    /**
     * @[Assert\Choice(choices: Calculator::GENRES, OPERATIONS: 'Choose a valid operation.')] 
     */
    protected $operation;


    public function getFirstNumber(): string
    {
        return $this->firstNumber;
    }

    public function setFirstNumber(string $firstNumber): void
    {
        $this->firstNumber = $firstNumber;
    }

    public function getSecondNumber(): string
    {
        return $this->secondNumber;
    }

    public function setSecondNumber(string $secondNumber): void
    {
        $this->secondNumber = $secondNumber;
    }

    public function getOperation(): string
    {
        return $this->operation;
    }

    public function setOperation(string $operation): void
    {
        $this->operation = $operation;
    }

}