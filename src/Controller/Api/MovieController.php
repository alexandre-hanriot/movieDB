<?php

namespace App\Controller\Api;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    /**
     * @Route("/api/movies", name="api_movies_get", methods={"GET"})
     */
    public function getMoviesCollection(MovieRepository $movieRepository)
    {
        // On va chercher les films
        $movies = $movieRepository->findAll();

        // On les renvoie en JSON
        return $this->json($movies, 200, [], ['groups' => 'movies_get']);
    }

    /**
     * @Route("/api/movies", name="api_movies_post", methods={"POST"})
     */
    public function postMovies(Request $request)
    {
        dump($request->getContent());
        
        return $this->json('Film ajouté', 201);
    }
}
