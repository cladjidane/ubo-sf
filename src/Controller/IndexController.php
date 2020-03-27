<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController {
    public function index() {
        $args = array(
            "content" => "Bienvenue !",
            'affiche_annonce' => true
        );
        return $this->render('content.html.twig', $args);
    }

    public function contact(){
        $args = array(
            "content" => "Contact !",
            'affiche_annonce' => false
        );
        return $this->render('content.html.twig', $args);
    }
}