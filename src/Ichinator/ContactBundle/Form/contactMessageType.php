<?php

namespace Ichinator\ContactBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class contactMessageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', textType::class, array('label' => 'Votre nom ou pseudo', 'trim' => 'true'))
            ->add('mailAdress', textType::class, array('label' => 'Votre adresse mail', 'trim' => 'true'))
            ->add('telephoneNumber', integerType::class, array('label' => 'Votre numéro de téléphone', 'required' => 'false'))
            ->add('message', textAreaType::class, array('label'  => 'Votre Message'))
            ->add('submit', SubmitType::class, array('label' => 'Envoyer'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ichinator\ContactBundle\Entity\contactMessage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ichinator_contactbundle_contactmessage';
    }


}
