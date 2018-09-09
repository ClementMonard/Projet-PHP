<?php
include 'controller/index_controller.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title><?= $title ?></title>
    </head>
    <body>
        <?= $xml->page[$page]->content; ?>
    </body>
</html>