<?php

/**
 * Classe Statistics pour effectuer des calculs statistiques sur un tableau de nombres
 */
class Statistics
{
    private array $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * Calcule la somme du tableau de nombres
     */
    public function getSum(): float
    {
        return array_sum($this->numbers);
    }

    /**
     * Calcule la moyenne du tableau de nombres
     */
    public function getAverage(): float
    {
        if (empty($this->numbers)) {
            return 0;
        }
        return $this->getSum() / count($this->numbers);
    }

    /**
     * Trouve la valeur minimale du tableau de nombres
     */
    public function getMin(): float
    {
        if (empty($this->numbers)) {
            return 0;
        }
        return min($this->numbers);
    }

    /**
     * Trouve la valeur maximale du tableau de nombres
     */
    public function getMax(): float
    {
        if (empty($this->numbers)) {
            return 0;
        }
        return max($this->numbers);
    }
}

// Exemple d'utilisation
$numbers = [10, 5, 8, 20, 3, 15];
$stats = new Statistics($numbers);

echo "Tableau de nombres : " . implode(", ", $numbers) . "<br>";
echo "Somme : " . $stats->getSum() . "<br>";
echo "Moyenne : " . $stats->getAverage() . "<br>";
echo "Valeur minimale : " . $stats->getMin() . "<br>";
echo "Valeur maximale : " . $stats->getMax() . "<br>";
