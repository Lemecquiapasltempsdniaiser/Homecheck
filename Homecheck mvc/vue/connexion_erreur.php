<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="SITE2.css" />
        <title>HomeCheck</title>
    </head>

    <body class="acceuil">

       <?php include'headerbienvenue.php'; ?>

       <?php
    $entete = entete("Mon site / Accueil non connecté");
    ob_start();
    ?>
        <fieldset>
            <form method="POST" action="index.php?cible=verif">
                Identifiant
                <br/>
                <input type="text" name="identifiant"/>
                <br/>
                Mot de passe
                <br/>
                <input type="text" name="mdp"/>
                <br/>
                <input type='submit'/>
            </form>
        </fieldset>
    <?php
    $menu = ob_get_clean();
    $contenu = "<h2>Erreur dans le formulaire de connexion</h2>".$erreur;
    $pied = pied();

    include 'gabarit.php';
?>

    </body>
</html>