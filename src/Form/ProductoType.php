<?php
namespace App\Form;

use App\Entity\Producto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, array('attr'  => array('class' => 'form-control')))
            ->add('descripcion', TextType::class, array('attr'  => array('class' => 'form-control')))
            ->add('size', NumberType::class, array('attr'  => array('class' => 'form-control')))
            //->add('ingredientes', EntityType::class, array('attr'  => array('class' => 'form-control')))
            ->add('precio', TextType::class, array('attr'  => array('class' => 'form-control')))
            ->add('image', FileType::class, array('data_class'=> null, 'label' => 'Foto del producto'))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Producto::class,
        ));
    }
}
