<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MainBundle\Entity\Distributore;
use Symfony\Component\HttpFOundation\Request;
use MainBundle\Repository\DistributoreRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $tabaccherie = $this->getDoctrine()->getRepository("MainBundle:Distributore")->findAll();
        // var_dump($tabaccherie);
        return $this->render('MainBundle:Default:index.html.twig', [
            'tabaccherie' => $tabaccherie,
        ]);
    }

    public function filterAction(Request $request)
    {
        $sigarette = $request->get('sigarette');
        $tabacco = $request->get('tabacco');
        $kitcartine = $request->get('kitcartine');
        $accendini = $request->get('accendini');
        $condom = $request->get('condom');
        $restomax = $request->get('restomax')*1;

        // $query="SELECT d FROM MainBundle:Distributore d
        // WHERE restomax <= $restomax";
        // if ($sigarette) $sql.=" AND isSigarette = 1 ";
        // else " AND isSigarette =0";

        $distributori = $this->getDoctrine()->getManager()->createQuery(
                "SELECT d FROM MainBundle:Distributore d
                WHERE d.isSigarette = $sigarette
                AND d.isTabacco = $tabacco
                AND d.isKitcartine = $kitcartine
                AND d.isAccendini = $accendini
                AND d.isCondom = $condom
                AND d.restomax <= $restomax"
            )->getResult();
        var_dump($distributori);
        return $this->redirect('MainBundle:Default:index.html.twig',[
            'distributori'=>$distributori
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
