<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ZabiegiController extends AbstractController
{
    /**
     * @Route("/zabiegi", name="zabiegi")
     */
    public function index()
    {
        return $this->render('zabiegi/index.html.twig', [
            'controller_name' => 'ZabiegiController',
        ]);
    }
}
