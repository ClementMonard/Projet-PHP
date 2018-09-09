<?php

if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');
} else {
    exit('Echec');
}

if (isset($_GET['page'])){
    $page = intval(htmlspecialchars($_GET['page']));
} else {
    $page = 0;
}

 $title = $xml->page[$page]->title;
 
?>