<?php

// site normal :  monsite.fr/gestionLivres/afficheLivre/1
// site monopage : monsite.fr/index.php?controle=gestionLivre&action=listeL
//  controle = catégorie de services que l'on va manipuler
//  action = Le service en question

// permet d'utiliser les variables $_SESSION[""]
session_start();

$controle = "home";
$action = "home";

if (isset($_GET["controle"]) && isset($_GET["action"])) {
    $controle = $_GET["controle"];
    $action = $_GET["action"];
}

// le index.php va "à l'intérieur" du fichier de controle
require("./controllers/$controle.php");
// à l'intérieur de ce fichier, on doit appeller la fonction donnée dans le paramètre action.
$action();