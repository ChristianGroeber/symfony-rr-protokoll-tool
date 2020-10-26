<?php

namespace App\Form;

use App\Entity\Leiter;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeiterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('name')
            ->add('vorname')
            ->add('mobile')
            ->add('geburtsdatum', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
            ])
            ->add('team', EntityType::class, [
                'multiple' => false,
                'class' => Team::class,
                'required' => false,
            ])
            ->add('speichern', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Leiter::class,
        ]);
    }
}
