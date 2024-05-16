<?php


namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    #[Route('/')]
    public function index(LoggerInterface $logger): Response
    {

        $logger->info('Hello, world!');
        return $this->render('main/homepage.html.twig');
    }
}
