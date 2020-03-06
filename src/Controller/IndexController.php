<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController {
    public function index() {
        //$args = array("content" => "<div style=\"color: red; background: black; padding: 20px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente reiciendis voluptatibus quis, ea vel architecto culpa fugit libero quaerat soluta quam unde maxime blanditiis voluptatum commodi dolor? Atque, id minus.</div>");
        return $this->render('index.html.twig');
    }

    public function contact(){
        return new Response("<html><body><h1>Contact!</h1></body></html>");
    }
}