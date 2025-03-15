<?php

namespace App\Form;

use App\Entity\Participantes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ParticipantesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nombreParticipante',TextType::class,array('attr' => array('readonly'=>false), 'required' => true))
        ->add('apellidosParticipante',TextType::class,array('attr' => array('readonly'=>false), 'required' => true))
        ->add('nacimiento',DateType::class,array('attr' => array('readonly'=>false), 'required' => true))
        ->add('numero',\Symfony\Component\Form\Extension\Core\Type\IntegerType::class, array('attr' => array('readonly'=>false), 'required' => false, 'label'=> 'Número de corredor'))
        ->add('nacimiento', DateType::class, [
            'widget' => 'single_text',
            'html5' => false,
            'attr' => ['class' => 'js-datepicker'],
        ])
        ->add('talla',ChoiceType::class, [
            'choices' => [
            ''=>'',
            'Extrachica' => 'Extrachica',
            'Chica' => 'Chica',
            'Mediana' => 'Mediana',
            'Grande' => 'Grande',
            'Extragrande' => 'Extragrande',
            'Ninguna' => 'Ninguna',
            ]], array('required' => false, 'label'=> 'Talla Playera', 'disabled' => true))
        ->add('categoria',ChoiceType::class, [
            'choices' => [
                ''=>'',    
                'Preinfantil' => 'Preinfantil',
                'InfantilA' => 'InfantilA',
                'InfantilB' => 'InfantilB',
                'InfantilC' => 'InfantilC',
                'InfantilD' => 'InfantilD',
                'Juvenil1' => 'Juvenil1',
                'Juvenil2' => 'Juvenil2',
                'Libre' => 'Libre',
                'Master' => 'Master',
                'Veteranos' => 'Veteranos',
                'Veteranosplus' => 'Veteranosplus',
            ]],array('attr' => array('readonly'=>false), 'required' => true))
        ->add('telefono',\Symfony\Component\Form\Extension\Core\Type\IntegerType::class,array('attr' => array('readonly'=>false), 'required' => true))
        ->add('email',TextType::class,array('attr' => array('readonly'=>false), 'required' => true))
        ->add('sexo',ChoiceType::class, [
            'choices' => [
                ''=>'',    
                'Hombre' => 'Hombre',
                'Mujer' => 'Mujer',
            ]
        ],array('attr' => array('readonly'=>false), 'required' => true))
        ->add('pagado',ChoiceType::class, [
            'choices' => [
                ''=>'',    
                'SI' => 1,
                'NO'=> 0,
            ]
        ],array('attr' => array('readonly'=>false), 'required' => true))
        ->add('tipopago',ChoiceType::class, [
            'choices' => [
                ''=>'',    
                'Transferencia' => 'Transferencia',
                'Efectivo'=> 'Efectivo',
            ]
        ],array('attr' => array('readonly'=>false), 'required' => true))
        ->add('folio',TextType::class,array('attr' => array('readonly'=>false), 'required' => false))
        ->add('save', SubmitType::class, array('label' => 'Guardar'));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participantes::class,
        ]);
    }
}
