<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des livres</title>
</head>
<body>
    Affichage de tous les livres : 
    <ul>
    <?php
        for ($i = 0; $i < count($tousLesLivres); $i++) {
            $nom = $tousLesLivres[$i]["nom"];
            $id = $tousLesLivres[$i]["idL"];
            $idEmprunteur = $tousLesLivres[$i]["statut"];
            $nomEmprunteur = $tousLesLivres[$i]["nomEmprunteur"];

            echo "<li>Livre <a href='index.php?controle=gestionLivre&action=modifS&livre=$id'>$nom</a> (n°$id) est emprunté par $nomEmprunteur (n°$idEmprunteur)</li>\n";
        }
    ?>
    </ul>
</body>
</html>