<?php

namespace App\Form;

use App\Entity\Inventory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InventoryForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name', null, [
                'label' => 'Name',
                'attr' => [
                    'placeholder' => 'Name des Artikels',
                    'class' => 'form-control',
                ],
            ])
            ->add('amount', null, [
                'label' => 'Menge',
                'attr' => [
                    'placeholder' => '50',
                    'class' => 'form-control',
                ],
            ])
            ->add('storageplace', null, [
                'label' => 'Lagerort',
                'attr' => [
                    'placeholder' => 'Regal-001',
                    'class' => 'form-control',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Inventory::class,
        ]);
    }
}
