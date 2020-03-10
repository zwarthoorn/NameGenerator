<?php

namespace App\Controller;

use App\Services\NameService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NameGeneratorController extends AbstractController
{
    /**
     * @Route("/", name="name_generator")
     */
    public function index()
    {
        $person = NameService::getRandomName();

        return $this->render('name_generator/index.html.twig', [
            'controller_name' => 'NameGeneratorController',
            'person' => $person
        ]);
    }
}
