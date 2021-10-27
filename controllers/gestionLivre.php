<?php

function listeL() {
    // afficher tous les livres
    require("./model/livre.php");
    require("./model/utilisateurs.php");
    $tousLesLivres = pretL_bd();
    for ($i = 0; $i < count($tousLesLivres); $i++) {
        $idEmprunteur = $tousLesLivres[$i]["statut"];
        $tousLesLivres[$i]["nomEmprunteur"] = profilU_bd($idEmprunteur)["nom"];
    }
    // normalement on a tous les livres, ce serait cool de les **afficher**
    require("./views/afficheLivre.tpl");
}

function modifS() {
    // ce que antoine est en train de coder actuellement.
    $numeroLivre = $_GET["livre"];

    $ilAenvoyeLeFormulaire = isset($_POST["nom"]) && isset($_POST["num"]);

    if ($ilAenvoyeLeFormulaire) {
        $nom = $_POST["nom"];
        $num = $_POST["num"];

        $idU = 0;
        require("./model/livre.php");
        require("./model/utilisateurs.php");
        // récupère le numéro d'abonné de la personne envoyée depuis le formulaire
        // cette fonction est donnée dans le sujet et on assume qu'elle a déjà été codée (ie. on a pas besoin de la coder)
        if (verifU_bd($nom, $num, $idU)) {
            // changer le statut du livre tel que l'id de l'emprunter est $idU
            changeL_bd($numeroLivre, $idU);
            header("location: index.php?controle=gestionLivre&action=listeL");
        } else {
            die("Erreur l'utilisateur $nom n'existe pas");
        }
    } else {
        require("./views/modifLivre.tpl");
    }

}