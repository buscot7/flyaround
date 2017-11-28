<?php

namespace WCS\CoavBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)

    {
        $builder->add('first_name');
        $builder->add('last_name');
        $builder->add('phoneNumber');
        $builder->add('birthDate');
        $builder->add('isACertifiedPilot');
        $builder->add('isActive');

    }

    public function getParent()

    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()

    {
        return 'app_user_registration';
    }

    public function getName()

    {
        return $this->getBlockPrefix();
    }

}