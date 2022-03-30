<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SandboxController extends AbstractController
{
    #[Route('/sandbox', name: 'app_sandbox')]
    public function indexAction(): Response
    {
        return new Response('<body>Hello World!</body>');
    }
}
