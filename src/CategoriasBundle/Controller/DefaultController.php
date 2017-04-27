<?php

namespace CategoriasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CategoriasBundle:Default:index.html.twig');
    }
}
