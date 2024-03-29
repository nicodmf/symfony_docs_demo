<?php
// src/Acme/DemoBundle/Form/Type/AuthorType.php
namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AuthorType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        /*$builder->add('gender_code', new GenderType(), array(
            'empty_value' => 'Choose a gender',
        ));*/
        $builder->add('gender_code', 'gender', array(
            'empty_value' => 'Choose a gender',
        ));
        $builder->add('gender_code_expanded', 'gender', array(
            'empty_value' => 'Choose a gender',
            'expanded' => true,
        ));
    }
    
    public function getName()
    {
        return 'author';
    }
}
