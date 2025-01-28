<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */

 

/**
 * Classe Math avec des méthodes statiques pour les opérations mathématiques de base
 */
class Math {
    /**
     * Additionne deux nombres
     * @param float $a Premier nombre
     * @param float $b Deuxième nombre
     * @return float Résultat de l'addition
     */
    public static function add($a, $b) {
        return $a + $b;
    }

    /**
     * Soustrait le deuxième nombre du premier
     * @param float $a Premier nombre
     * @param float $b Deuxième nombre
     * @return float Résultat de la soustraction
     */
    public static function subtract($a, $b) {
        return $a - $b;
    }

    /**
     * Multiplie deux nombres
     * @param float $a Premier nombre
     * @param float $b Deuxième nombre
     * @return float Résultat de la multiplication
     */
    public static function multiply($a, $b) {
        return $a * $b;
    }
}

// Exemples d'utilisation des méthodes statiques de la classe Math

echo "Addition : " . Math::add(1, 1) . "\n";
echo "Soustraction : " . Math::subtract(11, 8) . "\n";
echo "Multiplication : " . Math::multiply(4, 8) . "\n";

?>
