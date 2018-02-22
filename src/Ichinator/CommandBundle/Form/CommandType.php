<?php

namespace Ichinator\CommandBundle\Form;

use Ichinator\CommandBundle\Entity\Burger;
use Ichinator\CommandBundle\Entity\Dessert;
use Ichinator\CommandBundle\Entity\Plat;
use Ichinator\CommandBundle\IchinatorCommandBundle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class CommandType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       // $emBurger = $this->getDoctrine

        $builder
            ->add('burger', EntityType::class, array(
                'class' => Burger::class,
                'choice_label' => 'name',
                'required' => false,
                'placeholder' => 'Aucun',
            ))
            ->add('plat', EntityType::class, array(
                'class' => Plat::class,
                'choice_label' => 'name',
                'required' => false,
                'placeholder' => 'Aucun',
            ))
            ->add('dessert', EntityType::class, array(
                'class' => Dessert::class,
                'choice_label' => 'name',
                'required' => false,
                'placeholder' => 'Aucun',
            ))
            ->add('date', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour', 'hour' => 'Heure', 'minute' => 'Minute'
                )))
            ->add('submit', SubmitType::class)
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ichinator\CommandBundle\Entity\Command'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ichinator_commandbundle_command';
    }


}
