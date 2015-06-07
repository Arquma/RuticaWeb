<?php

namespace Rutica\DataBaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SitioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('imagen')
            ->add('longitud')
            ->add('latitud')
            ->add('precio')
            ->add('idActividad')
            ->add('idProvincia')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rutica\DataBaseBundle\Entity\Sitio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rutica_databasebundle_sitio';
    }
}
