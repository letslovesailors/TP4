<?php

namespace App\Controllers;

class Abonne
{
    public function index()
    {

        $abonnes = [
            ['id' => 1, 'nom' => 'Dupont', 'email' => 'dupont@example.com'],
            ['id' => 2, 'nom' => 'Durand', 'email' => 'durand@example.com'],
            ['id' => 3, 'nom' => 'Martin', 'email' => 'martin@example.com'],
        ];


        echo '<h1>Liste des abonnés</h1>';
        echo '<ul>';
        foreach ($abonnes as $abonne) {
            echo '<li>';
            echo 'ID: ' . $abonne['id'] . ' - Nom: ' . $abonne['nom'] . ' - Email: ' . $abonne['email'];
            echo '</li>';
        }
        echo '</ul>';
    }
}

// Exemple d'utilisation
$pageAbonne = new Abonne();
$pageAbonne->index();