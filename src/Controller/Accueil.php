<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Accueil extends AbstractController
{
    #[Route('/accueil')]
    public function index(): Response
    {
        return $this->render('pages/accueil.html.twig');
    }
}