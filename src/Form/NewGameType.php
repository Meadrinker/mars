<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class NewGameType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
            ->add('numberPlayers', ChoiceType::class, [
                'placeholder' => '',
                'label' => 'Wybierz liczbę graczy',
                'choices' => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                ],
            ]);
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {

            for ($i = 1; $i <= $event->getData()['numberPlayers']; $i++) {
                $event->getForm()

                    ->add('name' . $i, TextType::class, [
                        'label' => 'Nazwa gracza ' . $i . ':',
                        'constraints' => array(
                            new NotBlank(),
                            new Length(array(
                                'min' => 3,
                                'max' => 20,
                                'minMessage' => "Haslo musi skladac sie z przynajmniej {{ limit }} znakow",
                                'maxMessage' => "Maksymalna liczba znakow w hasle to {{ limit }}"
                            )),
                        ),
                    ]);
            }
        });
        $builder
        ->add('save', SubmitType::class, array(
            'label' => 'Zapisz zmiany',
            'attr' => ['class' => 'registerSubmitButton'],
        ));
        $builder->getForm();
    }

}