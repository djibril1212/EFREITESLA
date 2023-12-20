=<?php

include_once 'controller/teslaController.php';
$pdo = Bdd::connexion();

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

$teslaController = new teslaController();

if ($page == 'accueil') {
    include 'view/accueil.php';
}
elseif ($page == 'contact') {
    include 'view/contact.php';
}
elseif($page == 'getContact') {
    include('view/getContact.php');
}
elseif ($page == 'velo') {
    $teslaController->afficherTesla();
}
elseif ($page == 'commander') {
    $tesla = $teslaController->getTeslaFromDatabase();
    include 'view/commander.php';
}
elseif ($page == 'traitement_commande') {
    include 'view/traitement_commande.php';
}
elseif ($page == 'tesla') {
    if (isset($_GET['tesla'])) {
        $teslaId = $_GET['tesla'];
        $teslaController = new TeslaController();
        $teslaController->afficherDetailstesla($teslaId);
    } else {
        echo 'ID du tesla manquant';
    }
} else {
    echo 'page introuvable';
}
?>
