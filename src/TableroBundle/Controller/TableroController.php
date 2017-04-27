<?php

namespace TableroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TableroController extends Controller
{
    public function indexAction()
    {
        return $this->render('TableroBundle:Tablero:home.html.twig');
    }
    
    public function tableroAction()
    {
        return $this->render('TableroBundle:Home:home.html.twig');
    }
}
