<?php
/*
 * ÉNONCÉ :
 * Créer une classe Stats
 * Ajouter une méthode static average() avec comme paramètre
 * - array $array, float $min, float $max
 * Cette méthode doit retourner la moyenne uniquement des valeurs comprises entre min et max
 * Appeler cette méthode avec le tableau suivant
 * $bodyTemparatures = [36.5, 37.8, 36.2, 38.5, 20.4, 40.5, 62.4, 37.4]
 * Inclure uniquement dans le calcul de la moyenne les valeurs comprise 32 et 45
 * Appeler la classe en passant les valeurs en paramètre
*/



class Stats
{
    public static function average(array $array, float $min, float $max): float
    {
        $filteredArray = array_filter($array, function($value) use ($min, $max) {
            return $value >= $min && $value <= $max;
        });

        if (empty($filteredArray)) {
            return 0;
        }

        return array_sum($filteredArray) / count($filteredArray);
    }
}

// Tableau des températures corporelles
$bodyTemperatures = [36.5, 37.8, 36.2, 38.5, 20.4, 40.5, 62.4, 37.4];

// Calcul de la moyenne des températures entre 32 et 45 degrés
$averageTemperature = Stats::average($bodyTemperatures, 32, 45);

// Affichage du résultat
echo "La température moyenne (entre 32 et 45 degrés) est : " . round($averageTemperature, 2) . " °C";

