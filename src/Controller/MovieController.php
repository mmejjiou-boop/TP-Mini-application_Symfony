<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class MovieController extends AbstractController
{
//route pour afficher la page d'accueil
    #[Route('/', name: 'index')]
        public function accueil(): Response
        {
            $title = 'Bienvenue sur movies exploreur';
            $title =  strtoupper($title);

            return $this->render('movie/index.html.twig', [
                   'title' => $title,
            ]);
        }
//route pour afficher le détail d'un film
#[Route('/films/{slug}', name: 'films')]
public function films(string $slug): Response
{
    $films = [
        ['annee' => 1970, 'nom_du_film' => 'harry-potter-1'],
        ['annee' => 1980, 'nom_du_film' => 'harry-potter-2'],
        ['annee' => 1990, 'nom_du_film' => 'harry-potter-3'],
        ['annee' => 2000, 'nom_du_film' => 'harry-potter-4'],
        ['annee' => 2010, 'nom_du_film' => 'harry-potter-5'],
    ];

 return $this->render('movie/films.html.twig', [
        'films' => $films,
        'slug' => $slug
    ]);
}



//route pour afficher la liste des films
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

//route pour afficher la page de contact
#[Route('/contact', name: 'contact')]
    public function contact(): Response
    {        return $this->render('movie/contact.html.twig');
    }   
}