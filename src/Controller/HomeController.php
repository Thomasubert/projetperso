<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController{

    public function home() : Response{

        return $this->render('home.html.twig');
    }

    /**
     * @Route("/", name="accueil")
     */
    public function accueil() : Response{
        return $this->render('accueil.html.twig');
    }

    public function profil() : Response{

        return $this->render('profil.html.twig');
    }


    /**
     * @Route("/apropos", name="apropos")
     */

    public function apropos() : Response{
        return $this->render('apropos.html.twig');

    }



    public function __construct(){

        $this->created_at = new \DateTime();
    }

}