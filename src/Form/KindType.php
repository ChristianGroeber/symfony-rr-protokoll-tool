<?php

namespace App\Form;

use App\Entity\Kind;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KindType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('vorname')
            ->add('elternEmail')
            ->add('elternMobile')
            ->add('elternName')
            ->add('geburtsdatum', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('team', EntityType::class, [
                'class' => Team::class,
                'multiple' => false,
                'required' => false,
                'choice_label' => 'name',
                'choice_value' => 'id',
            ])
            ->add('speichern', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Kind::class,
        ]);
    }
}
