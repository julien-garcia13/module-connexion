<!-- Début du HTML. -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Page d'accueil</title>
        <!-- Pour que ça soit joli. -->
        <style type="text/css">
            body
            {
                background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
                background-size: 400% 400%;
                animation: gradient 15s ease infinite;
                height: 100vh;
            }
            @keyframes gradient
            {
                0%
                {
                    background-position: 0% 50%;
                }
                50%
                {
                    background-position: 100% 50%;
                }
                100%
                {
                    background-position: 0% 50%;
                }
            }
            p
            {
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                color: white;
                font-family: "oswald";
                text-align: center;
                color: aliceblue;
                font-size: 50px;
            }
            @font-face
            {
                font-family: "oswald";
                src: url("font/oswald-variablefont_wght-webfont.woff") format("woff"), url("font/oswald-variablefont_wght-webfont.woff2") format("woff2");
            }
            p1
            {
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                font-family: "oswald";
                font-size: 60px;
                text-align: center;
                font-family: "oswald";
            }
            li
            {
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                font-family: "oswald";
                font-size: 50px;
                color: white;
                text-align: center;
            }
            .boutton
            {
                top: 100px; left: 300px;
                width: 220px;
                height: 50px;
                border: none;
                outline: none;
                color: #fff;
                background: #111;
                cursor: pointer;
                position: relative;
                z-index: 0;
                border-radius: 10px;
            }
            .boutton:before
            {
                content: '';
                background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
                position: absolute;
                top: -2px;
                left:-2px;
                background-size: 400%;
                z-index: -1;
                filter: blur(5px);
                width: calc(100% + 4px);
                height: calc(100% + 4px);
                animation: glowing 20s linear infinite;
                opacity: 0;
                transition: opacity .3s ease-in-out;
                border-radius: 10px;
            }
            .boutton:active
            {
                color: #000
            }
            .boutton:active:after
            {
                background: transparent;
            }

            .boutton:hover:before
            {
                opacity: 1;
            }
            .boutton:after
            {
                z-index: -1;
                content: '';
                width: 100%;
                height: 100%;
                background: #111;
                left: 0;
                top: 0;
                border-radius: 10px;
            }
            @keyframes glowing
            {
                0% { background-position: 0 0; }
                50% { background-position: 400% 0; }
                100% { background-position: 0 0; }
            }
            a
                {
                    font-size: 25px;
                    color: white;
                }
        </style>
    </head>
    <body>
        <main>
            <p1>Bienvenue dans cette page d'accueil !</p1><br />
            <p>
                Ce test sert à voir si le PHP et le MySQL sont fonctionnels pour les opérations suivantes :<br />
                <li>La page d'accueil en elle-même</li>
                <br />
                <li>Un formulaire d'inscription, de connexion, une section pour modifier ton profil</li>
                <br />
                <li>Une page admin.</li>
            </p>
            <br />
            <button class="boutton" type="button"><a href="inscription.php">S'inscrire</a></button>
            <button class="boutton" type="button"><a href="connexion.php">Se connecter</a></button>
        </main>
    </body>
</html>
