<?php
session_start(); // On ouvre une session.
echo "Bienvenue " . $_SESSION['login'] . " .";
?>
<!-- Début du HTML. -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
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
.acceuil
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
.boutton
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
.GitHub
{
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
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
        <div class="accueil">
    <form method="POST" action="profil.php">
        <p1>Tableau de bord</p1><br />
        <div class="boutton">
        <a href="profil.php">
            <button>Modifier mon profil</button>
        </a>
        </div>
    </form>
    <form method="POST" action="deconnexion.php"> <!-- L'utilisateur va être redirigé vers la page d'accueil après s'être déconnecté -->
    <div class="boutton">
        <a href="deconnexion.php">
            <button>Déconnexion</button>
        </a>
    </div> 
</div>
</form>
<footer class="GitHub">
        <a href="https://github.com/julien-garcia13/module-connexion"><img id="GitHub" src="GitHub_Logo.png" alt="logo"></img></a>
    </footer>
</main>
</div>
</body>
</html>