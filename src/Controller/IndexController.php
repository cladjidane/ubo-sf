<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController {
    public function index() {
        $args = array(
            "title" => "Bienvenue !",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sint facere voluptatem beatae porro ea, voluptates laborum, harum quis maxime omnis? Asperiores esse et omnis minus repudiandae labore expedita voluptatibus?",
            'display_desc' => true
        );
        return $this->render('content.html.twig', $args);
    }

    public function contact(){
        $args = array(
            "title" => "Contact !"
        );
        return $this->render('content.html.twig', $args);
    }
}