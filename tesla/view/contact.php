<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>

        .container {
            max-width: 800px;
            margin: auto;
        }

        form {
            margin-bottom: 20px;
        }

        iframe {
            width: 100%;
            height: 300px;
            margin-bottom: 20px;
        }

        p {
            text-align: justify;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
    </style>
    <title>Contact</title>
</head>
<body>

    <div class="container">
        <h1>Contact</h1>

        <form action="index.php?page=getContact" method="post">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message :</label>
                <textarea class="form-control" name="message" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

    <iframe
            src="https://maps.google.com/maps?q=48.78926954468816,2.3636654693114982&output=embed"
            allowfullscreen
    ></iframe>

        <p>
        <p>Tesla : Redéfinir la Mobilité Électrique
            Tesla est une entreprise pionnière qui se spécialise dans la conception et la fabrication de voitures électriques de haute performance, offrant une solution révolutionnaire et durable pour la mobilité. Fondée avec une vision axée sur l'innovation, la technologie et le design, Tesla s'efforce de transformer la manière dont les gens se déplacent, en proposant des véhicules électriques sophistiqués.
            <br>
            Innovation Technologique : Tesla intègre les dernières avancées technologiques dans la conception de ses voitures électriques. Des moteurs électriques puissants, des batteries longue durée et des systèmes intelligents de gestion de l'énergie sont au cœur de chaque modèle.
            <br>
            Design Avant-Gardiste : L'esthétique contemporaine et fonctionnelle est une priorité pour Tesla. Chaque modèle, y compris la célèbre "Model S", est conçu avec un souci du détail et une approche ergonomique pour offrir une expérience de conduite exceptionnelle.
            <br>
            Durabilité Environnementale : Tesla s'engage à réduire l'empreinte carbone en favorisant l'utilisation de matériaux durables et recyclables. Les voitures électriques de Tesla sont une alternative écologique aux modes de transport traditionnels, contribuant ainsi à la préservation de l'environnement.
            <br>
            Connectivité Intégrée : La connectivité intelligente est au cœur de l'expérience Tesla. Des applications dédiées permettent aux utilisateurs de suivre leurs performances, de planifier des itinéraires, et même de personnaliser les réglages de leur voiture via des interfaces conviviales.
            <br>
            Gamme Diversifiée : Tesla propose une gamme diversifiée de voitures électriques pour répondre aux besoins variés des conducteurs. Du modèle polyvalent "Model 3" au luxueux "Model X", en passant par le dernier-né "Model Y", chaque voiture est conçue pour s'adapter aux modes de vie modernes.
            <br>
            Engagement envers la Communauté : Au-delà de la fabrication de voitures, Tesla s'engage activement auprès de la communauté. Des initiatives de sensibilisation, des programmes de durabilité et des partenariats avec des organisations écologiques reflètent l'engagement de l'entreprise envers la responsabilité sociale.
            <br>
            Ensemble, ces éléments font de Tesla une entreprise de premier plan dans le secteur des voitures électriques, redéfinissant la mobilité avec des solutions innovantes, esthétiques et respectueuses de l'environnement.
        </p>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
