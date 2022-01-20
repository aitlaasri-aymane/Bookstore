<?php

namespace App\Form;

use App\Entity\Auteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_prenom', null, [
                "label" => false,
                "attr" => [
                    "placeholder" => "Nom de l'auteur...",
                    "class" => "form-control"
                ]
            ])
            ->add('sexe', ChoiceType::class, [
                "label" => false,
                "choices" => [
                    "Male" => "M",
                    "Female" => "F"
                ],
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('date_de_naissance', BirthdayType::class, [
                "label" => false,
                "widget" => "single_text",
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('nationalite', CountryType::class, [
                "label" => false,
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            //->add('livres')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Auteur::class,
        ]);
    }
}
