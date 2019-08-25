<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class KontaktController extends AbstractController
{
    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function index()
    {
        return $this->render('kontakt/index.html.twig', [
            'controller_name' => 'KontaktController',
        ]);
    }
}
