<?php
// src/Controller/PostAjaxController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class MortyController extends AbstractController
{
   #[Route('/Morty', name: 'Morty')]
   public function ajax(): Response
   {
       return $this->render('Morty/index.html.twig');
   }
}
