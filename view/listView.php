<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>
</head>
<body>
    <!-- Créer un header joli avec un message de bienvenue qui mentionne le nom de l'utilisateur -->

    <p></p>
    
    <!-- Créer un main avec un tableau qui présente les différents évènements de la base de données-->

    <div id="book-table">
    <?php 
        foreach($eventsList as $events) {
            // Déterminer la classe de badge en fonction de la difficulté
            $difficultyClass = strtolower($events["difficulte"]); // Convertir en minuscule pour les classes CSS
        ?>
        <div class="book-line">
            <!-- Image -->
            <div class="image">
                <img src="<?= htmlspecialchars($events["image"]) ?>" alt="Image de l'évènement">
            </div>
            <!-- Détails -->
            <div class="details">
                <div class="detail-row">
                    <strong>Lieu :</strong> <?= htmlspecialchars($events["lieu"]) ?>
                </div>
                <div class="detail-row">
                    <strong>Description :</strong> <?= htmlspecialchars($events["description"]) ?>
                </div>
                <div class="detail-row">
                    <span class="badge <?= htmlspecialchars($difficultyClass) ?>">
                        <?= htmlspecialchars($events["difficulte"]) ?>
                    </span>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
</div>

</body>
</html>
