<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AvisosController extends AbstractController
{
    /**
     * @Route("/avisos", name="avisos")
     */
    public function index()
    {
        return $this->render('avisos/index.html.twig', [
            'controller_name' => 'AvisosController',
        ]);
    }
}
