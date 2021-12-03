<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/moteur_recherche.css">
    <link rel="stylesheet" href="sass/dynamic-form.css">


    <script src="js/dynamic-form.js"></script>
</head>
<body>
    <!-- Importation du Menu principal -->
    <?php
    include("parts/menu.html");
    ?>
    
    <main>
        
        <?php
        
        // Connexion BD

        // Formulation de la requête
        if (! isset($_GET["searchBy"])) {
            echo "Aucun résultat.";
        } else {
            switch ($_GET["searchBy"]) {
                case "people":
                    $params = [];
                    $searchTypes = ["nom", "prenom", "titre"];
                    foreach($searchTypes as $data) {
                        if (isset($_GET[$data])) {
                            $params[$data] = $_GET[$data];
                        }
                    }

                    foreach($params as $k => $v) {
                        echo $k . " : " . $v . "\n";
                    }
                    break;
                case "sauvetage":

                    break;
            }
        }

        // Requête

        // Interprétation des résultats

        ?>

    </main>
</body>
</html>