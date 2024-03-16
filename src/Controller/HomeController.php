<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home', methods:["GET", "POST"])]
    /**
     * @param Request $request
     * 
     */
    public function index(Request $request): Response
    {

        

        dd( $request->query->all() );
        return new Response("responseContent", 200, []);

    }
}
