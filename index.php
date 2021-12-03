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
        <form id="search" method="GET" action="results.php">
            <div>
                <button type="button" id="nom" onclick="toggle_search('nom', 'champs')">
                    <p>Nom</p>
                </button>
                <button type="button" id="prenom" onclick="toggle_search('prenom', 'champs')">
                    <p>Prénom</p>
                </button>
                <button type="button" id="titre" onclick="toggle_search('titre', 'champs')">
                    <p>Titre (grade)</p>
                </button>
            </div>
            <fieldset id="champs">
                <input type="hidden" name="searchBy" value="people">
            </fieldset>
            
            <input type="submit">
        </form>
    </main>
</body>
</html>