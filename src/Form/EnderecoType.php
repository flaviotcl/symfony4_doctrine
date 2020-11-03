<?php

namespace App\Form;

use App\Entity\Endereco;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnderecoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rua', TextType::class,  [
                'label' => "Rua",
                'attr' => [
                    'placeholder' => 'Informe a rua do Cliente',
                    'class' => 'form-control'
                ]
            ])
         ->add('numero', TextType::class,  [
                'label' => "Número",
                'attr' => [
                    'placeholder' => 'Informe o Número',
                    'class' => 'form-control'
                ]
            ])
         ->add('bairro', TextType::class,  [
                'label' => "Bairro",
                'attr' => [
                    'placeholder' => 'Informe o Bairro',
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Endereco::class
        ]);
    }
}
