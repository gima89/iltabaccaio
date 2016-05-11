<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainBundle:Default:index.html.twig');
    }

    public function resultsAction()
    {
        return $this->render('MainBundle:Default:results.html.twig');
    }

    public function singleResultAction()
    {
        return $this->render('MainBundle:Default:singleResult.html.twig');
    }
}
