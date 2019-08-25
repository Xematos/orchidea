<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WizytyController extends AbstractController
{
    /**
     * @Route("/wizyty", name="wizyty")
     */
    public function index()
    {
        return $this->render('wizyty/index.html.twig', [
            'controller_name' => 'WizytyController',
        ]);
    }
}
