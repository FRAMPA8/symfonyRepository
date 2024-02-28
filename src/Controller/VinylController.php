<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $tracks = array(['artist' => '1st', 'song' => 'song'],
            ['artist' => '2nd', 'song' => 'song2'],
            ['artist' => '3rd', 'song' => 'song3']);

        return $this->render('vinyl/homepage.html.twig', ['title' => 'PB & Jams', 'tracks' => $tracks]);
    }

    #[Route('/browse/{genre}')]
    public function browse(string $genre = null): Response
    {
        if ($genre) {
            $title = 'Genre: ' . u(str_replace('-', ' ', $genre))->title(true);
        } else {
            $title = 'All Genres';
        }

        return new Response($title);
    }
}