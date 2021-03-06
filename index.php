<?php include 'controller/index_controller.php'; ?>
<?php include 'controller/controllerForm.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Alegreya+SC|Libre+Baskerville|Playfair+Display" rel="stylesheet">         
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <title><?= $title ?></title>
    </head>
    <body class="font">
        <nav id="color" class="navbar navbar-expand-lg navbar-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <?php for ($countPages = 0; $countPages < count($displayPages); $countPages++) { ?></li>
                        <li><a href="/page-<?= $countPages; ?>.html"><?= $xml->page[$countPages]->menu ?></a></li>
                        <li><?php } ?></li>
                </ul>
            </div>
        </nav>
        <?= $xml->page[$page]->content; ?>
        <!--affiche les resultat si aucune érreur est compté dans le tableau-->
        <?php 
        //Si on appui sur le bouton Envoyer et que la comptabilisation du nombre d'erreurs dans le tableau est égal à 0 
            if (isset($_POST['send']) && count($formError) == 0) {
                //Affiche un message de succés en dessous du formulaire
                ?>
                <p class="text-success"><?= 'Le message a bien été envoyé !' ?></p>
                <?php
            } else {
                //Sinon affichage du tableau d'error grâce au foreach
                foreach ($formError as $error) {
                    ?>
                    <p class="text-danger"><?= $error ?></p>
                    <?php
                }
            }
        ?>
    </body>
</html>