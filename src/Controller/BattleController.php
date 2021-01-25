<?php
// src/Controller/BattleController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BattleController
{
    /**
      * @Route("/battle")
      */
      public function battle(): Response
      {
          $tab_pokemons = ["Carapuce", "Salamèche", "Dracaufeu", "Pikachu", "Grotadmorv", "Raichu", "Rattata", "Chenipan", "Typhlosion", "Bulbizarre"];
          $random_number1 = random_int(0, count($tab_pokemons) - 1);
          $random_number2 = random_int(0, count($tab_pokemons) - 1);
  
          return $this->render('lucky/number.html.twig', [
              'pokemon' => $tab_pokemons[$random_number1],
              'pokemon2' => $tab_pokemons[$random_number2]
          ]);
      }
}