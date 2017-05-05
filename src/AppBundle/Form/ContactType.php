<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('naam', TextType::class,
                array(
                	'label' => 'Naam :',
                	'attr' => array(
                		'placeholder' => 'Uw naam', 'size' => 35
                		),
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve uw naam in te vullen" ))
                		),
                    //'required' => true,
                    
                )
            )

            ->add('email', EmailType::class,
                array(
                	'attr' => array(
                		'placeholder' => 'Uw email adres', 'size' => 35
                		),
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve uw email adres in te vullen" )),
                		new Email(array("message" => "Dit is geen geldig email adres !")),
                		),
                   //'required' => true,
                    'label' => 'Email :'
                )
            )

            ->add('onderwerp', TextType::class,
                array(
                	'attr' => array(
                		'placeholder' => 'Onderwerp'
                		),
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve een onderwerp in te vullen" ))
                		),
                    //'required' => true,
                    'label' => 'Onderwerp :'
                )
            )

            ->add('bericht', TextareaType::class,
                array(
                	'attr' => array(
                		'placeholder' => 'Bericht', 'rows' => 12, 'cols' => 35
                		),
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve een bericht te geven" ))
                		),
                    //'required' => true,
                    'label' => 'Bericht :'
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
            //'data_class' => 'AppBundle\Entity\Shops'
            'error_bubbling' => true
        ));
    }
}