<?php

namespace App\Controller;

use App\Repository\ArtisteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArtisteController extends AbstractController
{
    #[Route('/artistes', name: 'app_artistes', methods :'GET')]
    public function listeArtistes(ArtisteRepository $repo)
    {
        $artistes=$repo->findAll();
        return $this->render('artiste/listeArtistes.html.twig', [
            'lesArtistes' => $artistes
        ]);
    }
}   
