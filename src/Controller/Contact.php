<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Contact extends AbstractController
{
    #[Route('/contact')]
    public function index(): Response
    {
        return $this->render('pages/contact.html.twig');
    }
}