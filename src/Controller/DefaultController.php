<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
     /**
      * @Route("/")
      */
    public function number(): Response
    {
        $tab_pokemons = ["Carapuce", "Salamèche", "Dracaufeu", "Pikachu", "Grotadmorv", "Raichu", "Rattata", "Chenipan", "Typhlosion", "Bulbizarre, "Raichu"	];
        $random_number = random_int(0, count($tab_pokemons) - 1);

        return $this->render('lucky/number.html.twig', [
            'pokemon' => $tab_pokemons[$random_number],
        ]);
    }
}
