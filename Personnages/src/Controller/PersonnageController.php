<?php

namespace App\Controller;

use App\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    #[Route('accueil', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            // 'controller_name' => 'PersonnageController',
        ]);
    }

    #[Route('/personnages', name: 'personnages')]
    public function persos(): Response
    {
        Personnage::creerPersonnage();

              return $this->render('personnage/persos.html.twig', [
                    "tabPersos" => Personnage::$personnages

              ]);
    }

    #[Route('/personnages/{nom}', name: 'afficherPersonnage')]
    public function afficherPersonnage(): Response
    {
        // Personnage::creerPersonnage();

        //       return $this->render('personnage/persos.html.twig', [
        //             "tabPersos" => Personnage::$personnages

        //       ]);
    }
}
