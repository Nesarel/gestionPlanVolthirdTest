<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController{

    #[Route('/produit/{id?0}', requirements: ['id' => '\d+'], name: 'produit')]
    public function affiche(Request $request) : Response{

        // dump($request);

        $param = $request->attributes->get('id');

        // dump($param);

        return new Response('ID Produit : ' . $param);

    }

    #[Route('/produit/{slug}', requirements: ['slug' => '[a-z]*'], name: 'produit-by-slug')]
    public function afficheBySlug(Request $request) : Response{

        // dump($request);

        $param = $request->attributes->get('slug');

        // dump($param);

        return new Response('Slug Produit : ' . $param);

    }

}