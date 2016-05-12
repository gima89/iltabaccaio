<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $tabaccherie = [
            [
                'name' => 'Tabaccheria 1',
                'lat' => 45.34343,
                'lng' => 9.5445,
            ],
            [
                'name' => 'Tabaccheria 2',
                'lat' => 45.3054343,
                'lng' => 9.5345,
            ],
            [
                'name' => 'Tabaccheria 3',
                'lat' => 45.34243,
                'lng' => 9.5465,
            ],
        ];
        
        return $this->render('MainBundle:Default:index.html.twig', [
            'tabaccherie' => $tabaccherie,
        ]);
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
