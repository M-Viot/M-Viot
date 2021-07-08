<?php

namespace App\Form;

use DateTime;
use App\Entity\RemboursementDetail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class RemboursementDetailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('beneficiaireReglement')
            ->add('beneficiaireSoin')
            ->add('complementCgam')
            ->add('dateActe',DateTimeType::class,['widget' => 'single_text'])
            ->add('fraisReel')
            ->add('idRemboursement')
            ->add('montantRemboursement')
            ->add('remboursementSecuriteSociale')
            ->add('resteCharge')
            ->add('statut')
            ->add('tauxSecuriteSociale')
            ->add('typeActe')
            ->add('refReglement')
            ->add('autre_mutuelle')
            ->add('decompteDispo')
            ->add('isBloque')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RemboursementDetail::class,
        ]);
    }
}
