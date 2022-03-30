<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - CESeat</title>
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="commun.css">
    <script src="header.js"></script>
    
</head>
<body> 
    <header>
        <a href="./" class="menu_logo">
            <img src="img/oceseat-header.png" alt="">
        </a>
        <div class="menu_camembert">
            <div id="bouton_camembert">
                <img src="img/menu_burger.svg" alt="">
            </div>
            <ul id="sous_menu">
                <li><a href="#">Catégories</a></li>
                <li><a href="#">Tous les restaurants</a></li>
                <li class="li_ligne">
                    <div class="ligne_sous_menu"></div>
                </li>
                <li><a href="./inscription/">S'inscrire</a></li>
                <li><a href="./connexion/">Se connecter</a></li>
                <li><a href="#">Mon compte</a></li>
                <li><a href="php/logoutAction.php">Déconnexion</a></li>
            </ul>
        </div>
    </header>
  
    <main>
        <img id="logo_accueil" src="img/O'CESEAT.png">
        <div id="container_recherche">
            <input type="search" name="search" id="searchbar_accueil" placeholder="Votre recherche... (ex: kebab, fastfood...)" required>
            <input type="submit" id="submit" placeholder="oui">
        </div>
    </main>
</body>
</html>
