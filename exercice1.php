<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/



class Product {
    protected $name;
    protected $price_without_tax;
    protected $vat_rate;

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getPriceWithoutTax() {
        return $this->price_without_tax;
    }

    public function getVatRate() {
        return $this->vat_rate;
    }

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setPriceWithoutTax($price) {
        $this->price_without_tax = $price;
    }

    public function setVatRate($rate) {
        $this->vat_rate = $rate;
    }

    // Méthode pour calculer le prix TTC
    public function getPriceWithVat() {
        return $this->price_without_tax * (1 + $this->vat_rate / 100);
    }
}

// Instanciation d'un produit
$product = new Product();
$product->setName("Ordinateur ");
$product->setPriceWithoutTax(1000);
$product->setVatRate(20);

// Affichage des informations du produit
echo "Nom du produit : " . $product->getName() . "\n";
echo "Prix  : " . $product->getPriceWithoutTax() . " €\n";
echo "Taux de TVA : " . $product->getVatRate() . "%\n";
echo "Prix TTC : " . number_format($product->getPriceWithVat(), 2) . " €\n";
