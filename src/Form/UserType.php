<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormTypeInterface;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

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
            ->add('captcha', Recaptcha3Type::class, [
                'constraints' => new Recaptcha3(['message' => 'Il y a eu un problème avec le captcha. Veuillez contacter le service reCaptcha avec ces informations : {{ errorCodes }}']),
                'action_name' => 'inscription',
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
