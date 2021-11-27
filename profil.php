<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion;charset=utf8', 'root', ''); // Je me connecte à phpMyAdmin en appelant ma BDD 'moduleconnexion'.
$_SESSION["id"];
if(isset($_POST['submit']))
{
    if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['login']) AND !empty($_POST['password'])) // Avec else, il va afficher un message si des champs ont étés oubliés.
    {
        $login = $_POST['login'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $password = $_POST['password']; // Je ne mettrais pas de chiffrement du mot de passe pour faciliter la correction (même si nous pouvons déchiffrer facilement) pour éviter de perdre du temps de à chaque fois c/c le mdp et le décrypter
        $insertData = $bdd->prepare('UPDATE utilisateurs SET login = ?, prenom =?,nom=?,password=? WHERE id = ?'); // La commande utilisée qui va modifier l'user dans la BDD.
        $insertData->execute(array($login,$prenom,$nom,$password,$_SESSION['id'])); // Il va exécuter la commande.
        echo "Les informations ont bien étés modifiées " . $login . " !"; // Message que la modification à bien été prise en compte.
    }
    else
    {
        echo "Tu dois remplir tous les champs !"; // Le message des champs oubliés.
    }
}
?>


<!-- Début du HTML. -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification du profil</title>
    <!-- CSS -->
    <style type="text/css">
    *
    {
        margin: 0px;
        padding: 0px;
    }
    .area
    {
        display: flex;
        flex-direction: row;
        justify-content: center;
        background: #4e54c8;  
        background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
        width: 100%;
        height:100vh;
    }
    .circles
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .circles li
    {
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 25s linear infinite;
        bottom: -150px;
    }
    .circles li:nth-child(1)
    {
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
    }
    .circles li:nth-child(2)
    {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
    }
    .circles li:nth-child(3)
    {
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
    }
    .circles li:nth-child(4)
    {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
    }
    .circles li:nth-child(5)
    {
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
    }
    .circles li:nth-child(6)
    {
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
    }
    .circles li:nth-child(7)
    {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
    }
    .circles li:nth-child(8)
    {
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
    }
    .circles li:nth-child(9)
    {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
    }
    .circles li:nth-child(10)
    {
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
    }
    @keyframes animate
    {
        0%
        {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }
        100%
        {
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }

    }
    .edit
    {
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 10%;
        border: solid;
        width: 700px;
        height: 700px;
        border-radius: 10px;
        color: white;
    }
    input
    {
        margin-top: 10%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        position: relative;
        margin-left: 15%;
    }
    p1
    {
        margin-top: 20%;
        color: white;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        font-family: "oswald";
        font-size: 60px;
        text-align: center;
    }
    @font-face
    {
        font-family: "oswald";
        src: url("font/oswald-variablefont_wght-webfont.woff") format("woff"), url("font/oswald-variablefont_wght-webfont.woff2") format("woff2");
    }
</style>
</head>
<body>
<div class="area">
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    <main>
        <div class="edit">
    <form method="POST" action="profil.php" align="center">
        <p1>Modification du profil</p1><br />
        <input type="text" name="login">Login :<br /></input>
        <input type="text" name="prenom">Prénom :<br /></input>
        <input type="text" name="nom">Nom :<br /></input>
        <input type="password" name="password">Mot de passe :<br /></input>
        <input class="boutton" type="submit" name="submit"></input>
    </form>
</div>
</main>
</div>
<footer>
    <a href="https://github.com/julien-garcia13/module-connexion"><img id="GitHub" src="GitHub_Logo.png" alt="logo"></img></a>
</footer>
</body>
</html>