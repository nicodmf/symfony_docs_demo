<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\DemoBundle\Form\Type\AuthorType;

class DocController extends Controller
{
    /**
     * @Route("/cookbook/form/create_custom_field_type", name="_cookbook_form_create_custom_field_type")
     * @Template()
     */
    public function customFieldAction()
    {
        $form = $this->get('form.factory')->create(new AuthorType());
        return array('form' => $form->createView());
    }
}
