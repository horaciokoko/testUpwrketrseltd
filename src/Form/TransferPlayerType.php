<?php
// src/Form/TransferPlayerType.php

namespace App\Form;

use App\Entity\Player;
use App\Entity\Team;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Valid;

class TransferPlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $team       = $options['team']['team'];
        $otherTeams = $options['team']['teams'];
        $builder
            ->add('player', EntityType::class, [
                'class' => Player::class,
                'query_builder' => function (EntityRepository $er) use ($team) {
                    return $er->createQueryBuilder('p')
                        ->where('p.team = :team')
                        ->setParameter('team', $team);
                },
                'choice_label' => 'name', // Assuming 'name' is a property in Player entity
                'constraints' => [
                    new NotBlank(),
                    new Valid(),
                ],
            ])
            ->add('amount', IntegerType::class, [
                'constraints' => [
                    new NotBlank(),
                    new GreaterThan(0),
                ],
            ])
            ->add('targetTeam', EntityType::class, [
                'class' => Team::class,
                'choices' => [$otherTeams],
                'choice_label' => 'name',
                'constraints' => [
                    new NotBlank(),
                    new Valid(),
                ],
            ]);
        // Exclude the current team from choices
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null, // We handle data transfer in the controller
            'team' => null, // Pass the current team to the form
        ]);
    }
}
