<?php

require "db.php";

var_dump($_POST);

if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['zipCode']) && !empty($_POST['city']) && !empty($_POST['compagny'] && !empty($_POST['content']))){

    $firstName = protoctedString($_POST['firstName']);
    $lastName = protoctedString($_POST['lastName']);
    $email = protoctedString($_POST['email']);
    $phone = protoctedString($_POST['phone']);
    $zipCode = protoctedString($_POST['zipCode']);
    $city = protoctedString($_POST['city']);
    $compagny = protoctedString($_POST['compagny']);
    $content = protoctedString($_POST['content']);










    header("../contact.php");

}



function protoctedString($varaible){

    $varaibleProtected = "*" . $varaible . "*";

    return $varaibleProtected;

}