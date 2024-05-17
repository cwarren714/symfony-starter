<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HTMXController extends AbstractController
{

    #[Route('/htmx/swap', name: 'htmx')]
    public function testingHTMX()
    {
        return $this->render('htmx/sample.html.twig');
    }
}
