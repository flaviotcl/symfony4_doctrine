<?php

namespace App\Form;

use App\Entity\Especie;
use App\Entity\Raca;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, [
                'label' => "Nome",
                'attr' => [
                    'placeholder' => 'Informe o nome do Animal',
                    'class' => 'form-control'
                ]
            ])
            /**
            ->add('especie', EntityType::class, [
                'class' => Especie::class,
                'choice_label' => 'nome',
                'placeholder' => 'Selecione',
                'label' => 'Espécie',
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
             **/

            ->add('raca', EntityType::class, [
                'class' => Raca::class,
                'choice_label' => 'nome',
                'group_by' => 'nomeEspecie',
                'placeholder' => 'Selecione',
                'label' => 'Raça',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('data_nascimento', DateType::class, [
                'widget' => 'choice',
                'format' => 'dd/MM-yyyy',
                'label' => 'Data de Nascimento',
                'attr' => [
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
        ]);
    }
}
