<html>

    <body>

        <p>Qui veut emprunter le livre <?=$numeroLivre?></p>
        <form action="index.php?controle=gestionLivre&action=modifS&livre=<?= $numeroLivre ?>" method="post">

            <label>Nom de l'abonné</label>
            <input type="text" name="nom" placeholder="Nom de l'abonné">

            <label>Numéro d'abonné</label>
            <input type="text" name="num" placeholder="Numéro d'abonné">

            <input type="submit" value="Soumettre">

        </form>


    </body>

</html>