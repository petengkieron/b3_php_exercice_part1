<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */

 

// Importer le fichier de l'exercice2
require_once 'exercice2.php';

/**
 * Classe Employee qui hérite de la classe Person
 */
class Employee extends Person {
    protected $salary;
    protected $position;

    // Constructeur surchargé
    public function __construct($first_name, $last_name, $age, $salary, $position) {
        // Appel du constructeur parent
        parent::__construct($first_name, $last_name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    // Getters pour les nouvelles propriétés
    public function getSalary() {
        return $this->salary;
    }

    public function getPosition() {
        return $this->position;
    }

    // Setters pour les nouvelles propriétés
    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    // Surcharge de la méthode afficheInfos()
    public function afficheInfos() {
        parent::afficheInfos(); // Appel de la méthode parent
        echo "Salaire: " . $this->salary . " €\n";
        echo "Poste: " . $this->position . "\n";
    }
}

// Instanciation d'un objet Employee et affichage des infos
$employee = new Employee("John", "Doe", 30, 50000, "Développeur");
$employee->afficheInfos();

?>
