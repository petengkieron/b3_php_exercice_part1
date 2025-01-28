<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */


 

class ShoppingCart {
    private $items = [];
    private $total = 0;

    public function addItem($name, $price) {
        $this->items[] = ['name' => $name, 'price' => $price];
        $this->calculateTotal();
    }

    public function displayItems() {
        foreach ($this->items as $item) {
            echo "Article : " . $item['name'] . ", Prix : " . $item['price'] . "€\n";
        }
    }

    public function calculateTotal() {
        $this->total = 0;
        foreach ($this->items as $item) {
            $this->total += $item['price'];
        }
    }

    public function getTotal() {
        return $this->total;
    }
}

// Création d'un objet ShoppingCart et utilisation des méthodes
$cart = new ShoppingCart();

$cart->addItem("Livre", 15.99);
$cart->addItem("Stylo", 2.50);
$cart->addItem("Cahier", 4.75);

echo "Articles dans le panier :\n";
$cart->displayItems();

echo "Total du panier : " . $cart->getTotal() . "€\n";

?>
