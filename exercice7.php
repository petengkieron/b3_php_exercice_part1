<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/


class BankAccount {
    private $balance;

    public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Dépôt de {$amount}€ effectué. Nouveau solde : {$this->balance}€\n";
        } else {
            echo "Le montant du dépôt doit être positif.\n";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0) {
            if ($this->balance >= $amount) {
                $this->balance -= $amount;
                echo "Retrait de {$amount}€ effectué. Nouveau solde : {$this->balance}€\n";
            } else {
                echo "Solde insuffisant pour effectuer le retrait.\n";
            }
        } else {
            echo "Le montant du retrait doit être positif.\n";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

// Création d'un objet BankAccount et appel des méthodes
$account = new BankAccount(1000);  // Création d'un compte avec un solde initial de 1000€

echo "Solde initial : " . $account->getBalance() . "€\n";

$account->deposit(500);  // Dépôt de 500€
$account->withdraw(200);  // Retrait de 200€
$account->withdraw(2000);  // Tentative de retrait de 2000€ (solde insuffisant)
$account->deposit(-100);  // Tentative de dépôt d'un montant négatif

echo "Solde final : " . $account->getBalance() . "€\n";

?>
