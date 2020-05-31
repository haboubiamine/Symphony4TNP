<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Client;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_client',EntityType::class,['class' => Client::class,'choice_label' => 'nomcl','label' => 'Client','attr' => ['class' => 'form-control text-center']         
                ])

            ->add('id_service',EntityType::class,['class' => Service::class,'choice_label' => 'libelle','label' => 'Service','attr' => ['class' => 'form-control text-center']           
                ])     

            ->add('dater', DateTimeType::class, ['label' => 'Date','label' => 'Date','date_widget' => 'single_text','time_widget' => 'single_text',
                'attr' => ['class' => ' text-center'],
                ])

              

            ->add('etat', TextType::class, [
                'attr' => ['class' => 'form-control text-center','placeholder' => 'etat'],            
                ])
           
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
