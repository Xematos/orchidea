<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CennikController extends AbstractController
{
    /**
     * @Route("/cennik", name="cennik")
     */
    public function index()
    {
        return $this->render('cennik/index.html.twig', [
            'controller_name' => 'CennikController',
        ]);
    }
}
