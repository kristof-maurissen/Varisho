<?php

namespace AppBundle\Form;

use AppBundle\Entity\Promos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('title', TextType::class,
                array(
                	'label' => 'Titel :',
                    'attr' => array(
                        'placeholder' => 'De diep-link aff url'
                        ),
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve een titel in te vullen" ))
                		),
                )
            )

            ->add('description', TextareaType::class,
                array(
                    'label' => 'Beschrijving :',
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve een beschrijving in te vullen" )),
                		),
                )
            )

            ->add('url', UrlType::class,
                array(
                    'label' => 'Onderwerp :'
                	'attr' => array(
                		'placeholder' => 'De diep-link aff url'
                		),
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve een aff url in te vullen" ))
                		),
                )
            )

            ->add('startDate', DateTimeType::class,
                array(
                    'label' => 'Start-datum :'
                    'placeholder' => array(
                        'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
                        'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',
                        )
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve een start-datum te geven" ))
                		),
                )
            )


            ->add('endDate', DateTimeType::class,
                array(
                    'label' => 'Eind-datum :'
                    'placeholder' => array(
                        'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
                        'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',
                        )
                    'constraints' => array(
                        new NotBlank(array("message" => "Gelieve een eind-datum te geven" ))
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
            'data_class' => Promos::class,
            'error_bubbling' => true
        ));
    }
}