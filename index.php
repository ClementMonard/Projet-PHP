<?php
include 'controller/index_controller.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title><?= $title ?></title>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav>
                <div>
                    <ul>
                        <?php for ($i = 0; $i < count($test); $i++) { ?>
                            <li><a href="?page=<?= $i; ?>"><?= $xml->page[$i]->menu ?></a></li>
                        <?php } ?>
                    </ul>                
                </div>
            </nav>
        </div>
        <?= $xml->page[$page]->content; ?>
    </body>
</html>