<?php
//Déclaration des regex
//Déclaration regex numéro de téléphone
$regexPhoneNumber = '/^[0-9]{10}$/';
//Déclaration regex nom
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
//Déclaration regex texte
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\']+$/';
//déclaration d'un tableau d'érreur
$formError = array();
//Si LastName existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide

if (isset($_POST['your-name'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $lastName = htmlspecialchars($_POST['your-name']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $lastName)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['your-name'] = 'Saisie invalide.';
    }
    // verifie si le champs de nom et vide
    if (empty($lastName)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['your-name'] = 'Champ NOM obligatoire.';
    }
}
if (isset($_POST['your-email'])) {
    $mail = htmlspecialchars($_POST['your-email']);
    //le filtre permet de verifier l'email
    if (!FILTER_VAR($mail, FILTER_VALIDATE_EMAIL)) {
        $formError['your-email'] = 'Adresse mail incorrect';
    }
    if (empty($mail)) {
        $formError['your-email'] = 'Champ MAIL obligatoire.';
    }
}
if (isset($_POST['your-tel-615'])) {
    $phone = htmlspecialchars($_POST['your-tel-615']);
    if (!preg_match($regexPhoneNumber, $phone)) {
        $formError['your-tel-615'] = 'Numéro invalide.';
    }
    if (empty($phone)) {
        $formError['your-tel-615'] = 'Champ Numéro de téléphone obligatoire.';
    }
}
if (isset($_POST['your-subject'])) {
    $subject = htmlspecialchars($_POST['your-subject']);
    if (!preg_match($regexText, $subject)) {
        $formError['your-subject'] = 'Saisie invalide.';
    }
    if (empty($subject)) {
        $formError['your-subject'] = 'Champ Sujet obligatoire.';
    }
}
if (isset($_POST['your-ville'])) {
    $city = htmlspecialchars($_POST['your-ville']);
    if (!preg_match($regexName, $city)) {
        $formError['your-ville'] = 'veuillez entrer un nom de ville valide';
    }
    if (empty($city)) {
        $formError['your-ville'] = 'Champ Ville obligatoire.';
    }
}
if (isset($_POST['your-message'])) {
    $message = htmlspecialchars($_POST['your-message']);
    if (!preg_match($regexText, $message)) {
        $formError['your-message'] = 'Saisie invalide.';
    }
    if (empty($message)) {
        $formError['your-message'] = 'Champ Message obligatoire.';
    }
}
?>