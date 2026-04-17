<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class MovieController extends AbstractController
{

    #[Route('/', name: 'index')]
        public function accueil(): Response
        {
            $title = 'Bienvenue sur movies exploreur';
            $title =  strtoupper($title);

            return $this->render('movie/index.html.twig', [
                   'title' => $title,
            ]);
        }
#[Route('/films/{slug}', name: 'films_show')]
public function films(string $slug): Response
{
    $films = [
        ['annee' => 1970, 'nom_du_film' => 'harry-potter-1'],
        ['annee' => 1980, 'nom_du_film' => 'harry-potter-2'],
        ['annee' => 1990, 'nom_du_film' => 'harry-potter-3'],
        ['annee' => 2000, 'nom_du_film' => 'harry-potter-4'],
        ['annee' => 2010, 'nom_du_film' => 'harry-potter-5'],
    ];

    $film = null;

    foreach ($films as $f) {
        if ($f['nom_du_film'] === $slug) {
            $film = $f;
            break;
        }
    }

    return $this->render('movie/films.html.twig', [
        'film' => $film,
        'slug' => $slug
    ]);
}
#[Route('/film', name: 'film')]
public function film(): Response
{
    $films = [
        ['annee' => 1970, 'nom_du_film' => 'harry-potter-1'],
        ['annee' => 1980, 'nom_du_film' => 'harry-potter-2'],
        ['annee' => 1990, 'nom_du_film' => 'harry-potter-3'],
        ['annee' => 2000, 'nom_du_film' => 'harry-potter-4'],
        ['annee' => 2010, 'nom_du_film' => 'harry-potter-5'],
    ];

    return $this->render('movie/film.html.twig', [
        'films' => $films
    ]);
}
}