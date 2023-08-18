<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Regex;

class UserUpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,  ['label' => 'Votre Email', 'attr' =>['placeholder' => 'Écrivez votre email ici']])
            ->add('lastname', TextType::class, ['label' => 'Votre nom', 'attr' =>['placeholder' => 'Écrivez votre nom ici']])
            ->add('firstname', TextType::class, ['label' => 'Votre prénom', 'attr' =>['placeholder' => 'Écrivez votre prénom ici']])
            ->add('address', TextType::class, ['label' => 'Votre adresse', 'attr' => ['placeholder' => 'Écrivez votre rue et numéro de rue ici']])
            ->add('zipcode', NumberType::class, ['label' => 'Votre Code postal', 'attr' => ['placeholder' => 'Écrivez votre code postal']])
            ->add('city', TextType::class, ['label' => 'Votre ville', 'attr' => ['placeholder' => 'Écrivez votre ville']])
            ->add('submit', SubmitType::class, [
                'label' => 'Modifier', 
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
