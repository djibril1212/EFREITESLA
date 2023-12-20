<?php
include_once 'model/CarModel.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dernière tesla ajouter </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="bg-light">
<div class="container mt-5">
    <?php
    $CarModel = new CarModel();
    $latestCar = $CarModel->getBike();

    if ($latestCar) {
        echo '<h2>Dernière tesla ajouter</h2>';
        echo '<img src="' . $latestCar[0]['photo_url'] . '" class="img-fluid" alt="Vélo">';

        if (isset($latestCar[0]['nom'])) {
            echo '<p><strong>Nom du véhicule:</strong> ' . $latestCar[0]['nom'] . '</p>';
        }

        if (isset($latestCar[0]['description'])) {
            echo '<p><strong>Description:</strong> ' . $latestCar[0]['description'] . '</p>';
        }

        if (isset($latestCar[0]['prix'])) {
            echo '<p><strong>Prix:</strong> ' . $latestCar[0]['prix'] . ' €</p>';
        }

    } else {
        echo '<p>Aucun véhicule disponible pour le moment.</p>';
    }

    ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
