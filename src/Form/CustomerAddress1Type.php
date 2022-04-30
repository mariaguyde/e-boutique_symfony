<?php

namespace App\Form;

use App\Entity\CustomerAddress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerAddress1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type')
            ->add('name')
            ->add('firstName')
            ->add('phone')
            ->add('adress')
            ->add('codePostal')
            ->add('city')
            ->add('country')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CustomerAddress::class,
        ]);
    }
}
