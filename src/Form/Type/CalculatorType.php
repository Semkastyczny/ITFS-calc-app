<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstNumber', TextType::class)
            ->add('secondNumber', TextType::class)
            ->add('save', SubmitType::class)
        ;

    }

    /*
    * @return string 
    */
    public function getBlockPrefix():string
    {
        return '';
    }
}