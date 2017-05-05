<?php

namespace AppBundle\Form;

use AppBundle\Entity\Shops;
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
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ShopType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('shopName', TextType::class,
                array(
                	'label' => 'Naam Webshop :',
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve een webshop-naam in te vullen" ))
                		),
                    'attr' => array(
                        'placeholder' => 'De naam van de webshop',
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                        ),
                    'invalid_message' => array(
                        'style' => 'color: red'
                        )
                )
            )

            ->add('description', TextareaType::class,
                array(
                    'label' => 'Beschrijving :',
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve een beschrijving in te vullen" )),
                		),
                    'attr' => array(
                        'placeholder' => 'De beschrijving',
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                        ),
                )
            )

            ->add('url', UrlType::class,
                array(
                    'label' => 'Url :',
                	'attr' => array(
                		'placeholder' => 'De url',
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                		),
                	'constraints' => array(
                		new NotBlank(array("message" => "Gelieve een url in te vullen" ))
                		),
                )
            )

            ->add('affUrl', UrlType::class,
                array(
                    'label' => 'AffUrl :',
                    'attr' => array(
                        'placeholder' => 'De aff-url',
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                        ),
                    'constraints' => array(),
                )
            )

            ->add('keywords', TextareaType::class,
                array(
                    'label' => 'Keywords :',
                    'constraints' => array(
                        new NotBlank(array("message" => "Gelieve alle keywords in te vullen" )),
                        ),
                    'attr' => array(
                        'placeholder' => '',
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                        ),
                )
            )

            ->add('keywordsExtra', TextareaType::class,
                array(
                    'label' => 'Extra keywords :',
                    'constraints' => array(),
                    'attr' => array(
                        'placeholder' => 'Leeg laten tenzij "keywords-quote" = 1',
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                        ),
                )
            )

            ->add('keywordsQuote', TextType::class,
                array(
                    'label' => 'keywords-quote :',
                    'attr' => array(
                        'placeholder' => 'Indien extra: vul 1 in',
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                        ),
                )
            )

            ->add('country', TextType::class,
                array(
                    'label' => 'Landen :',
                    'constraints' => array(
                        new NotBlank(array("message" => "Gelieve een land in te vullen" ))
                        ),
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                        ),
                )
            )

            ->add('quote', TextType::class,
                array(
                    'label' => 'quote :',
                    'constraints' => array(
                        new NotBlank(array("message" => "Gelieve een quotering in te vullen" )),
                        ),
                    'attr' => array(
                        'placeholder' => 'standaard: 26',
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                        ),
                )
            )

            ->add('adv', TextType::class,
                array(
                    'label' => 'adv :',
                    'attr' => array(
                        'placeholder' => 'Indien ads: vul 1 in',
                        'class' => 'form-control',
                        'style' => 'margin-bottom:15px'
                        ),
                )
            );

       /* $builder
            ->add('title', CollectionType::class, array(
                'prototype' => PromoType::class 
                ));*/
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Shops::class
            //'error_bubbling' => true
        ));
    }
}