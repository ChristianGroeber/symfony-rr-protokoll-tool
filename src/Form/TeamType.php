<?php

namespace App\Form;

use App\Entity\Kind;
use App\Entity\Leiter;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('kinder', EntityType::class, [
                'class' => Kind::class,
                'choice_label' => 'name',
                'choice_value' => 'id',
                'multiple' => true,
                'expanded' => false,
                'required' => false,
            ])
            ->add('gruppenLeiter', EntityType::class, [
                'class' => Leiter::class,
                'multiple' => false,
                'expanded' => false,
                'choice_label' => 'vorname',
                'choice_value' => 'id',
                'required' => false,
            ])
            ->add('leiter', EntityType::class, [
                'class' => Leiter::class,
                'choice_label' => 'vorname',
                'choice_value' => 'id',
                'multiple' => true,
                'expanded' => false,
                'required' => false,
            ])
            ->add('speichern', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
        ]);
    }
}
