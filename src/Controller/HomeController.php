<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\HttpClient\ApiHttpClient;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ApiHttpClient $apiHttpClient): Response
    {
        $users = $apiHttpClient->getUsers();
        return $this->render('home/index.html.twig', [
            'users' => $users,
        ]);
    }
}
