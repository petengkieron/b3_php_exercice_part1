<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */

 

class Person {
    protected $first_name;
    protected $last_name;
    protected $age;

    // Constructor
    public function __construct($first_name, $last_name, $age) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    // Getters
    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getAge() {
        return $this->age;
    }

    // Setters
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    // Method to display information
    public function afficheInfos() {
        echo "Nom: " . $this->last_name . "\n";
        echo "Prénom: " . $this->first_name . "\n";
        echo "Âge: " . $this->age . " ans\n";
    }
}

// Create a new object and display information
$person = new Person("kieron", "Tchounkeu", 21);
$person->afficheInfos();

?>
