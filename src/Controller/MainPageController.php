<?php

namespace App\Controller;

use App\Repository\MainPageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index(MainPageRepository $mainPageRepository)
    {
        $opis = $mainPageRepository -> findAll();
        return $this->render('main_page/index.html.twig', [
            'opis' => $opis,
        ]);
    }
}
