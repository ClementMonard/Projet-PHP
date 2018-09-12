<?php include 'controllerForm.php'; ?>
<?php

//Si le fichier existe
if (file_exists('source.xml')) {
    //Alors tu charges la page
    $xml = simplexml_load_file('source.xml');
} else {
    //Sinon message d'erreur
    exit('Echec');
}

//Contrôle que la variable page qui contient l'id page existe
if (isset($_GET['page'])) {
    //Retourne la valeur numérique entière équivalente d'une variable avec la fonction intval avec une sécurité supplémentaire en utilisant la fonction htmlspecialchars
    $page = intval(htmlspecialchars($_GET['page']));
} else {
    $page = 0;
}
if (isset($_POST['send'])) {
    if (count($formError) == 0) {
        mail($mail, $subject, $message, 'From : bidule');
    }
}


//Création d'une variable $title qui aura comme contenu la valeur page et le titre de la page xml
$title = $xml->page[$page]->title;
$displayPages = $xml->page;
?>