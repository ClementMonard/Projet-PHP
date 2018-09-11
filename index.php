<?php
include 'controller/index_controller.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" crossorigin="anonymous">  
        <link rel="stylesheet" href="style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <title><?= $title ?></title>
    </head>
    <body>
        <nav id="color" class="navbar navbar-expand-lg navbar-dark bg-dark">
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
    </body>
</html>