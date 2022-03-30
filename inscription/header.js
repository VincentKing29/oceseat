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