<?php

include('model/bdd.php');

class TeslaController {
    public function afficherTesla() {
        $velos = $this->getTeslaFromDatabase();
        include('view/tesla.php');
    }

    public function afficherProduit($teslaId) {
        $tesla = $this->getVeloById($teslaId);

        if ($tesla) {
            include('view/tesla.php');
        } else {
            echo 'tesla non trouvé';
        }
}


    PUBLIC function getTeslaById($teslaId) {
        try {
            $bdd = Bdd::connexion();
            $stmt = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
            $stmt->execute([$teslaId]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération de la tesla  : " . $e->getMessage();
            return false;
        }
    }
    PUBLIC function getTeslaFromDatabase() {
        try {
            $bdd = Bdd::connexion();
            $query = $bdd->query("SELECT * FROM articles");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des tesla : " . $e->getMessage();
            return false;
        }
    }

}

?>
