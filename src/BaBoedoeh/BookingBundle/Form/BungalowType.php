<?php

namespace BaBoedoeh\BookingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BungalowType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('persons');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'BaBoedoeh\BookingBundle\Entity\Bungalow',
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'baboedoeh_bookingbundle_bungalow';
    }
}
