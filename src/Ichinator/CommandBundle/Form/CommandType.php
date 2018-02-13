<?php

namespace Ichinator\CommandBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CommandType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('burger', ChoiceType::class, array(
                'placeholder' => 'Choisissez un burger',
                'required' => false,
            ))
            ->add('plat', ChoiceType::class, array(
                'placeholder' => 'Choisissez un plat',
                'required' => false,
            ))
            ->add('dessert', ChoiceType::class, array(
                'placeholder' => 'Choisissez un plat',
                'required' => false,
            ))
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
