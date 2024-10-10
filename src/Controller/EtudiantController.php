<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant', name: 'etudiant')]
    public function index(): Response
    {
        return new Response("Bonjour mes étudiants");
    }

    #[Route('/etudiant/{id}', name: 'etudiant_id')]
    public function afficheEtudiant($id): Response
    {
        return new Response("Bonjour mes étudiants, ID: " . $id);
    }

    #[Route('/etudiant/nom/{name}', name: '[a-zA-Z]+')]
    public function voirNom($name): Response
    {
        return $this->render('etudiant/index.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/etudiant/login/{name}/{password}', name: '[a-zA-Z]+')]
    public function login($name, $password): Response
    {
        return $this->render('etudiant/login.html.twig', [
            'name' => $name,
            'password' => $password,
        ]);
    }
}