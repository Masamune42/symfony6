<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'app_hello')]
    public function hello(): Response
    {
        return new Response("<h1>Hello World!</h1>");
    }

    // On défini une route avec comme requirement sur "name" et "id" en RegEx
    #[Route('/blog/{id}/{name}', name: 'app_blog', requirements: ["name" => "[a-zA-Z]{5,50}", "id" => "[0-9]{2,6}"])]
    // On indique le type attendu pour id et name
    public function index(int $id, string $name): Response
    {
        return $this->render('blog/index.html.twig', [
            'id' => $id,
            'name' => $name,
            'controller_name' => 'BlogController',
        ]);
    }
}
