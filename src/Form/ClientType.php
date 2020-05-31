<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomcl', TextType::class, ['label' => 'Nom Client',
                'attr' => ['class' => 'form-control text-center','placeholder' => 'Nom'],         
                ])

            ->add('prenomcl', TextType::class, ['label' => 'Prenom Client',
                'attr' => ['class' => 'form-control text-center','placeholder' => 'Prenom'],
                ])
                
            ->add('adresse', TextType::class, [
                'attr' => ['class' => 'form-control text-center','placeholder' => 'Adresse'],
                ])

            ->add('mail', TextType::class, ['label' => 'E-mail',
                'attr' => ['class' => 'form-control text-center','placeholder' => 'Exemple@gmail.com'],
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
