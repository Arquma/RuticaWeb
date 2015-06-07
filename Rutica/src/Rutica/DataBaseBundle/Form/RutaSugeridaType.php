<?php

namespace Rutica\DataBaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RutaSugeridaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('distancia')
            ->add('precioTotal')
            ->add('tiempo')
            ->add('idProvincia')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rutica\DataBaseBundle\Entity\RutaSugerida'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rutica_databasebundle_rutasugerida';
    }
}
