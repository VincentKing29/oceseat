<?php require('../php/inscriptionAction.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - CESeat</title>
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="../commun.css">
</head>
<body>

    <?php
        include("../php/header.php");
    ?>
  
    <main>

        <div id="container_formulaire_inscription">
        

            <h2 id="inscription_titre">Inscription</h2>

            <form class="container" method="POST" id="formulaire_inscription">

                <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>

                <div class="mb-3">
                    <input class="formulaire_inscription_input" placeholder="Nom" type="text" name="nom">
                </div>

                <div class="mb-3">
                    <input class="formulaire_inscription_input" placeholder="Prenom" type="text" name="prenom">
                </div>

                <div class="mb-3">
                    <input class="formulaire_inscription_input" placeholder="Email" type="text" name="email">
                </div>

                <div class="mb-3">
                    <input class="formulaire_inscription_input" placeholder="Téléphone" type="text" name="telephone">
                </div>

                <div class="mb-3">
                    <input class="formulaire_inscription_input" placeholder="Mot de passe" type="password" name="motDePasse">
                </div>

                <div class="mb-3">
                    <input class="formulaire_inscription_input" placeholder="Confirmation mot de passe" type="password" name="motDePasseConfirmation">
                </div>


                <div class="container_checkbox">
                    <input type="checkbox" class="checkbox_round" />
                    <label>Je valide les <a>conditions générales d'utilisation</a>.</label>
                </div>

                <div class="container_checkbox">
                    <input type="checkbox" class="checkbox_round" />
                    <label>Je souhaite recevoir des newsletters.</label>
                </div>

                <button type="submit" name="validate">Inscription</button>
                <br><br>
            </form>

        </div>

    </main>
</body>
<script>
window.onload = function() {
    document.getElementById("bouton_camembert").addEventListener("click",openSousMenu);
}
function openSousMenu() {
    document.getElementById("sous_menu").style.display = "block";
    document.getElementById("bouton_camembert").removeEventListener("click",openSousMenu);
    document.getElementById("bouton_camembert").addEventListener("click",closeSousMenu);
}

function closeSousMenu() {
    document.getElementById("sous_menu").style.display = "none";
    document.getElementById("bouton_camembert").removeEventListener("click",closeSousMenu);
    document.getElementById("bouton_camembert").addEventListener("click",openSousMenu);
}
</script>
</html>
