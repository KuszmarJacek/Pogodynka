<?php

namespace App\Form;

use App\Entity\Weather;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WeatherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('FK_location')
            ->add('date')
            ->add('max_temp')
            ->add('min_temp')
            ->add('pressure')
            ->add('humidity')
            ->add('precipitation')
            ->add('sunny')
            ->add('cloudy')
            ->add('fog')
            ->add('raining')
            ->add('lightning')
            ->add('snow')
            ->add('wind')
            ->add('tornado')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Weather::class,
        ]);
    }
}
