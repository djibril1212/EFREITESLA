<?php

class  Bdd {
    public static function connexion() {
        try {
            $dsn = 'mysql:host=51.158.59.186;dbname=DJB_ABL;charset=utf8mb4;port=14301';
            $user = 'phppex';
            $pass = 'Supermotdepasse!42';

            $bdd = new PDO($dsn, $user, $pass);

            return $bdd;
        } catch (PDOException $e) {

            echo "Erreur de connexion à la base de données : " . $e->getMessage();
            return null;
        }
    }
}

$bdd = Bdd::connexion();


if ($bdd) {
    echo "";
} else {
    echo "Erreur lors de la connexion à la base de données.";
}
