<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isbn', TextType::class, [
                "label" => false,
                "attr" => [
                    "class" => "form-control",
                    "placeholder" => "Entrez l' ISBN..."
                ]
            ])
            ->add('titre', TextType::class, [
                "label" => false,
                "attr" => [
                    "class" => "form-control",
                    "placeholder" => "Entrez le titre du livre..."
                ]
            ])
            ->add('nombre_pages', null, [
                "label" => false,
                "attr" => [
                    "min" => 0,
                    "class" => "form-control",
                    "placeholder" => "Entrez le nombre de pages..."
                ]
            ])
            ->add('date_de_parution', BirthdayType::class, [
                "label" => false,
                "widget" => "single_text",
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('note', null, [
                "label" => false,
                "attr" => [
                    "min" => 0,
                    "max" => 20,
                    "placeholder" => "Entrez la note...",
                    "class" => "form-control"
                ]
            ])
            ->add('auteurs', null, [
                "label" => false,
                "attr" => [
                    "multiple" => true
                ]
            ])
            ->add('genres', null, [
                "label" => false,
                "attr" => [
                    "multiple" => true
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
