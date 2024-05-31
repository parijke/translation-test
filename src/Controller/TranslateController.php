<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TranslateController extends AbstractController
{
    #[Route('/{_locale}/translate', name: 'app_translate')]
    public function index(): Response
    {
        return $this->render('translate/index.html.twig', [
            'controller_name' => 'TranslateController',
        ]);
    }
}
