<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */


 

class Movie {
    public $title;
    public $genre;
    public $ageRestriction;

    public function __construct($title, $genre, $ageRestriction) {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch($viewerAge) {
        return $viewerAge >= $this->ageRestriction;
    }
}

// Création d'un objet Movie
$movie = new Movie("Inception", "Science-Fiction", 12);

// Appel de la méthode canWatch
$viewerAge = 1;
if ($movie->canWatch($viewerAge)) {
    echo "Le spectateur de {$viewerAge} ans peut regarder {$movie->title}.";
} else {
    echo "Le spectateur de {$viewerAge} ans ne peut pas regarder {$movie->title}.";
}

?>
