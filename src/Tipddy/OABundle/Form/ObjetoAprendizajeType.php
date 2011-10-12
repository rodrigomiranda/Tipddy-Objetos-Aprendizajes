<?php

namespace Tipddy\OABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ObjetoAprendizajeType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('requerimientos')
            ->add('derechos')
            ->add('version')
            ->add('autores')
            ->add('disenoInstruccional')
            ->add('desarrolladoresTecnicos')
            ->add('referencia')
            ->add('path')
            ->add('fechaUltSubida')
            ->add('usuario')
        ;
    }

    public function getName()
    {
        return 'tipddy_oabundle_objetoaprendizajetype';
    }
}
