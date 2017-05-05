<?php

namespace AppBundle\Form;

use AppBundle\Entity\Shops;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('search', TextType::class,
                array(
                	'label' => 'Zoek een webshop :',
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve zoekwoord in te vullen" ))
                		),
                )
            )

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Shops::class,
            'error_bubbling' => true
        ));
    }
}