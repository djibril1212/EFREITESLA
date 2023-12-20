<?php
include_once('model/bdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $carTitle = $_POST['carTitle'];
        $customerLastName = $_POST['customerLastName'];
        $customerFirstName = $_POST['customerFirstName'];
        $customerEmail = $_POST['customerEmail'];
        $orderMessage = $_POST['orderMessage'];

        $stmt = $pdo->prepare('INSERT INTO commandes (titre, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$carTitle, $customerLastName, $customerFirstName, $customerEmail, $orderMessage]);

        header('Location: ?page=commander&success=true');
        exit();
    } catch (PDOException $e) {
        header('Location: ?page=commander&error=true');
        exit();
    }
}

?>
