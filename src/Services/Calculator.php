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

    private function sum($firstComponent, $secondComponent):string
    {
        return bcadd($firstComponent, $secondComponent, 0);
    }

    private function subtraction($minuend, $subtrahend):string
    {
        return bcsub($minuend, $subtrahend, 0);
    }

    private function multiplication($firstProduct, $secondProduct):string
    {
        return bcmul($firstProduct, $secondProduct, 0);
    }

    private function division($dividend, $divider):string
    {
        return bcdiv($dividend, $divider, 0);
    }
}