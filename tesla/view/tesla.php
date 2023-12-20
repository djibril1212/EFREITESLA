<?php
include_once('model/bdd.php');
?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .car-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .car-card {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }

        .car-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>Nos véhicule</h1>

<?php
/** @var TYPE_NAME $teslas */
if (is_array($teslas) && count($teslas) > 0) {
    echo '<div class="velo-grid">';

    foreach ($teslas as $tesla) {
        $photo_url = isset($tesla['photo_url']) ? $tesla['photo_url'] : '';

        echo '<div class="car-card">';
        echo '<img src="' . $photo_url . '" class="car-image" alt="véhicule">';
        echo '<p>' . $tesla['titre'] . '</p>';
        echo '<p>Description : ' . $tesla['description'] . '</p>';
        echo '<p>Prix : ' . $tesla['prix'] . ' €</p>';
        echo '<a href="?page=produit&tesla=' . $tesla['id'] . '" class="btn btn-info">Plus d\'infos</a>';
        echo '<a href="?page=commander " class="btn btn-primary">Commander</a>';

        echo '<hr>';
        echo '</div>';
    }

    echo '</div>';
} else {
    echo '<p>Aucune tesla disponible pour le moment</p>';
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
