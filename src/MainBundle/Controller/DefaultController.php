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
        if(null!==($request->get('sigarette'))) $sigarette= true; else $sigarette =  false;
        if(null!==($request->get('tabacco'))) $tabacco= true; else $tabacco =  false;
        if(null!==($request->get('kitcartine'))) $kitcartine= true; else $kitcartine =  false;
        if(null!==($request->get('accendini'))) $accendini= true; else $accendini =  false;
        if(null!==($request->get('condom'))) $condom= true; else $condom =  false;
        // $tabacco = $request->get('tabacco')=='on' ? true : false;
        // $kitcartine = $request->get('kitcartine')=='on'? true : false;
        // $accendini = $request->get('accendini')=='on' ? true : false;
        // $condom = $request->get('condom')=='on' ? true : false;
        $restomax = $request->get('restomax')*1;

        // $query="SELECT d FROM MainBundle:Distributore d
        // WHERE restomax <= $restomax";
        // if ($sigarette) $sql.=" AND isSigarette = 1 ";
        // else " AND isSigarette =0";

        $distributori = $this->getDoctrine()->getEntityManager()->createQuery(
                "SELECT d FROM MainBundle:Distributore d
                WHERE isSigarette = $sigarette
                AND isTabacco = $tabacco
                AND isKitcartine = $kitcartine
                AND isAccendini = $accendini
                AND isCondom = $condom
                AND restomax <= $restomax"
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
