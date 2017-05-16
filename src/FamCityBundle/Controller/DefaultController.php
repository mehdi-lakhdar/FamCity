<?php

namespace FamCityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FamCityBundle:Default:index.html.twig');
    }

    public function homeAction()
    {
        return $this->render('FamCityBundle::Layout.html.twig');
    }

    public function loginPageAction(){
        return $this->render('FamCityBundle::Login.html.twig');
    }
    public function ProfilePageAction(){
        return $this->render('FamCityBundle::Pofil.html.twig');
    }
    public function EventPageAction(){
        return $this->render('FamCityBundle::Events.html.twig');
    }



}
