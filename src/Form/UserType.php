<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Regex;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,  ['label' => 'Votre Email', 'attr' =>['placeholder' => 'Remplissez votre Email ici']])
            ->add('lastname', TextType::class, ['label' => 'Votre nom', 'attr' =>['placeholder' => 'Remplissez votre nom ici']])
            ->add('firstname', TextType::class, ['label' => 'Votre prénom', 'attr' =>['placeholder' => 'Remplissez votre prénom ici']])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'options' => [
                    'attr' => [
                        'placeholder' => 'Votre mot de passe',
                    ],
                ],
                'first_options' => [
                    'constraints' => [
                        new Regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,32}$/', "Votre mot de passe doit contenir 12 caratères avec des minuscules, majuscules, chiffres et caractères spéciaux")
                    ],
                    'label' => 'Mot de passe',
                ],
                'second_options' => [
                    'label' => 'Répéter le mot de passe',
                ],
                'invalid_message' => 'Les mots de passe doivent être les mêmes',
                // Instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'Accepter nos Conditions Générales d\'utilisation',
                'mapped' => false, 
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos Conditions générales d\'utilisations',
                    ]),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'S\'inscrire', 
                'attr' => [
                    'class' => 'btn btn-perso'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
