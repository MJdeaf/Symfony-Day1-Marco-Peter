<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestfileController extends AbstractController
{
    #[Route('/testfile', name: 'testfile')]
    public function index(): Response
    {
        return $this->render('testfile/index.html.twig', [
            'controller_name' => 'TestfileController',
            'message' => ' Greetings Marco'
        ]);
    }

    #[Route('/user/{name}', name: 'user')]
    public function displayUser($name = 'Babsi'): Response
    {
        return $this->render('testfile/user.html.twig', [
            'name' => $name
        ]);
    }
}
