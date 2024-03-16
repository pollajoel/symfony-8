<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends AbstractController
{
    #[Route('/recipe/{slug}-{id}', name: 'recipe.show', requirements:['id'=>'\d+', 'id' => '[a-z0-9-]+'])]
    /**
     *@param Request $request
     *@param string $slug
     *@param string $id
     */
    public function index(Request $request, string $slug, string $id ): Response
    {
        dd( $request->attributes->get("id") );
        return $this->render('recipe/index.html.twig', [
            'controller_name' => 'RecipeController',
        ]);
    }
}
