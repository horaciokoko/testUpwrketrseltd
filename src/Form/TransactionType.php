<?php

// src/Form/TransactionType.php

namespace App\Form;

use App\Entity\Team;
use App\Entity\Transaction;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Valid;

class TransactionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transaction = $options['data'];
        $builder
            ->add('buyerTeam', EntityType::class, [
                'class' => Team::class,
                'choices' => [$transaction->getTeams()],
                'choice_label' => 'name',
                'constraints' => [
                    new NotBlank(),
                    new Valid(),
                ],
            ])
            ->add('amount', TextType::class, [
                'data' => $transaction->getPlayer()->getMarketPrice(), // Set your default value here
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Transaction::class,
        ]);
    }
}
