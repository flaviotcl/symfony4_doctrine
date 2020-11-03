<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Cliente;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('nome', TextType::class,  [
                'label' => "Nome",
                'attr' => [
                    'placeholder' => 'Informe o Nome do Cliente',
                    'class' => 'form-control'
                ]
            ])
            ->add('telefone', TextType::class,  [
                'label' => "Telefone",
                'attr' => [
                    'placeholder' => 'Informe o Telefone do Cliente',
                    'class' => 'form-control'
                ]
            ])
            ->add('email', EmailType::class,  [
                'label' => "Email",
                'attr' => [
                    'placeholder' => 'Informe o Email do Cliente',
                    'class' => 'form-control'
                ]
            ])
            ->add('endereco', EnderecoType::class, [
                'label' => false
            ])
            ->add('animal', EntityType::class, [
                'class' => Animal::class,
                'choice_label' => 'nome',
                'multiple' => true,
                'attr' =>[
                    'class' => 'form-control'
                ]
            ])
            ->add('salvar', SubmitType::class, [
                'label' => 'Salvar',
                'attr' =>[
                    'class' => 'btn btn-success'
                ]

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Cliente::class
        ]);
    }
}