<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function addAdminAction()
    {
        return $this->render('MainBundle:Admin:addAdmin.html.twig');
    }

    public function removeAdminAction()
    {
        return $this->render('MainBundle:Admin:removeAdmin.html.twig');
    }

    public function dispencerAction()
    {
        return $this->render('MainBundle:Admin:dispencer.html.twig');
    }

    public function dispencersAction()
    {
        return $this->render('MainBundle:Admin:dispencers.html.twig');
    }

    public function addDispencerAction()
    {
        return $this->render('MainBundle:Admin:addDispencer.html.twig');
    }

    public function removeDispencerAction()
    {
        return $this->render('MainBundle:Admin:removeDispencer.html.twig');
    }

    public function updateDispencerAction()
    {
        return $this->render('MainBundle:Admin:updateDispencer.html.twig');
    }


}
