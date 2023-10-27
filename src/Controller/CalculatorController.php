<?php

namespace App\Controller;

use App\Entity\Calculator;
use App\Form\Type\CalculatorType;
use App\Services\Calculator as ServicesCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    /**
     * @Route("/calculator/sum", name="sum", methods={"POST"})
     */
    public function getSum(Request $request, ServicesCalculator $calculatorService):Response
    {
        $calculator = new Calculator();
        $calculator->setOperation("sum");
        
        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculation = $calculatorService->calculate($form->getData());
        } else {
            $calculation = $form->getErrors();
        }

        return $this->formatResponse(json_encode($calculation));
    }

    /**
     * @Route("/calculator/difference", name="difference", methods={"POST"})
     */
    public function getDifference(Request $request, ServicesCalculator $calculatorService):Response
    {
        $calculator = new Calculator();
        $calculator->setOperation("difference");

        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculation = $calculatorService->calculate($form->getData());
        } else {
            $calculation = $form->getErrors();
        }

        return $this->formatResponse(json_encode($calculation));
    }

    /**
     * @Route("/calculator/product", name="product", methods={"POST"})
     */
    public function getProduct(Request $request, ServicesCalculator $calculatorService):Response
    {
        $calculator = new Calculator();
        $calculator->setOperation("product");

        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculation = $calculatorService->calculate($form->getData());
        } else {
            $calculation = $form->getErrors();
        }

        return $this->formatResponse(json_encode($calculation));
    }

    /**
     * @Route("/calculator/quotient", name="quotient", methods={"POST"})
     */
    public function getQuotient(Request $request, ServicesCalculator $calculatorService):Response
    {
        $calculator = new Calculator();
        $calculator->setOperation("quotient");

        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculation = $calculatorService->calculate($form->getData());
        } else {
            $calculation = $form->getErrors();
        }

        return $this->formatResponse(json_encode($calculation));
    }

    private function formatResponse(string $calculation):Response
    {
        $response = new Response($calculation);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}