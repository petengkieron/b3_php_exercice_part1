<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */


 

class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Getters et setters pour Person
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

class Student extends Person {
    private $grades = [];

    public function __construct($name, $age, $grades = []) {
        parent::__construct($name, $age);
        $this->grades = $grades;
    }

    // Getter pour grades
    public function getGrades() {
        return $this->grades;
    }

    // Setter pour grades
    public function setGrades($grades) {
        $this->grades = $grades;
    }

    // Méthode pour ajouter une note
    public function addGrade($grade) {
        $this->grades[] = $grade;
    }

    // Méthode pour calculer la moyenne
    public function getAverage() {
        if (empty($this->grades)) {
            return 0;
        }
        return array_sum($this->grades) / count($this->grades);
    }
}

// Création d'un objet Student et appel des méthodes
$student = new Student("Alice", 20, [15, 18, 12]);
echo "Nom de l'étudiant : " . $student->getName() . "\n";
echo "Age de l'étudiant : " . $student->getAge() . "\n";
echo "Notes : " . implode(", ", $student->getGrades()) . "\n";
echo "Moyenne : " . $student->getAverage() . "\n";

// Ajout d'une nouvelle note
$student->addGrade(16);
echo "Nouvelle moyenne après ajout d'une note : " . $student->getAverage() . "\n";

// Modification des notes
$student->setGrades([14, 16, 18, 20]);
echo "Moyenne après modification des notes : " . $student->getAverage() . "\n";
