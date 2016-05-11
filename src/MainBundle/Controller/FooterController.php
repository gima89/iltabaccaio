<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FooterController extends Controller
{
    public function chisiamoAction()
    {
        return $this->render('MainBundle:Footer:chisiamo.html.twig');
    }

    public function privacyAction()
    {
        return $this->render('MainBundle:Footer:privacy.html.twig');
    }

    public function segnalazioniAction()
    {
        return $this->render('MainBundle:Footer:segnalazioni.html.twig');
    }
}
