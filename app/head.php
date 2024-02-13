<?php

function head($page)
{

    //Page
    if ($page == 1) {
        $title = "NR Prévention";
    } else if ($page == 2) {
        $title = "Calendrier | NR Prévention";
    } else if ($page == 3) {
        $title = "Formation | NR Prévention";
    } else if ($page == 4) {
        $title = "Contact | NR Prévention";
    } else if ($page == 5) {
        $title = "NR Prévention";
    } else {
        $title = "404 | NR Prévention";
    }


    include "env.php";

    echo '<!doctype html> <html lang="fr"> <head>';
    require_once "composant/meta.phtml";
    echo '<title>' . $title . '</title>';
    echo '<link href="' . $env_urlLogo . '" rel="shortcut icon">';
    require_once "extension.php";
    echo '</head>';
}
