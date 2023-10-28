<?php

namespace App\Services;

use App\Entity\Calculator as EntityCalculator;
use stdClass;

class Calculator 
{

    public function calculate(EntityCalculator $calculator):object
    {
        $result = new stdClass();
        $result->result = 0; 
        $result->error = false; 

        switch ($calculator->getOperation()) {
            case "sum":
                $result->result = $this->sum($calculator->getFirstNumber(), $calculator->getSecondNumber());
                break;
            case "difference":
                $result->result = $this->subtraction($calculator->getFirstNumber(), $calculator->getSecondNumber());
                break;
            case "product":
                $result->result = $this->multiplication($calculator->getFirstNumber(), $calculator->getSecondNumber());
                break;
            case "quotient":
                $result->result = $this->division($calculator->getFirstNumber(), $calculator->getSecondNumber());
                break;
            default:
                $result->error = true;
                break;
        };
        return $result;

    }

    private function sum($firstComponent, $secondComponent):int
    {
        return $firstComponent + $secondComponent;
    }

    private function subtraction($minuend, $subtrahend):int
    {
        return $minuend - $subtrahend;
    }

    private function multiplication($firstProduct, $secondProduct):int
    {
        return $firstProduct * $secondProduct;
    }

    private function division($dividend, $divider):int
    {
        return $dividend/$divider;
    }
}