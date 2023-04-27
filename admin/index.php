<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="app.js"></script>
    <title>Florine Vandenabeele</title>
</head>
<body>
    
        <div class="slide" id="home">

            
            <header>
                
                <div id="logotexte">
                    <img src="images/logo_1.png" alt="logo" id="logo">
                    <h5>FLORINE VANDENABEELE</h5>
                    <h3>INFOGRAPHISTE</h3>
                </div>
                

                <nav>
                    <ul>
                        <li><a href="#home">Accueil</a></li>
                        <li><a href="#bio">Biographie</a></li>
                        <li><a href="#comp">Mes compétences</a></li>
                        <li><a href="#travaux">Mes travaux</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
        

            </header>


            <div id="gauche">
                <img src="images/illustrations dessin/moi noir.svg" id="imggauche">
            </div>
            <div id="droite">
                <img src="images/GRAPHIC DESIGN.svg" id="imgdroite">
            </div>

            <img src="images/swipeicones/ordi.png" alt="ordi" id="ordiswipe">
            <img src="images/swipeicones/flèche.png" alt="flèche" id="flècheswipe">
        </div>

        <div class="slide" id="bio">

            <div class="wrapper">
                
                    
                    <h1>BIOGRAPHIE</h1>
                    <p> Salut! Je m'appelle Florine! </p>
                        <br>
                    <p> Je suis une étudiante de 23 ans de la région      d'Ath. Je suis actuellement en BAC2 en techniques graphiques à l'EPSE de Marcq, Enghien.</p>
                        <br>
                    <p> J'aime la création de façon générale, que ce soit créer des logos, faire des photomontages, des sites, de la 2D, ... J'aime aussi le côté web comme la création de site internet.</p>
                        <br>
                    <p> Ce site a pour but de montrer quelques-uns des travaux que j'ai pu réaliser jusqu'à maintenant, tous n'y sont pas.</p>
                        <br>
                    <p> Si vous souhaitez travailler avec moi ou me parler d'un projet, rendez-vous en bas de la page pour me contacter!</p>
            
            </div>

            
        </div>

        <div class="slide" id="comp">

            <h1>MES COMPETENCES</h1>

            <div class="comp">

                <img src="images/comp icones/iconesnuages/ai.png" id="ai">
                <img src="images/comp icones/iconesnuages/pts.png" id="pts">
                <img src="images/comp icones/iconesnuages/bootstrap.png" id="bootstrap">
                <img src="images/comp icones/iconesnuages/css.png" id="css">
                <img src="images/comp icones/iconesnuages/figma.png" id="figma">
                <img src="images/comp icones/iconesnuages/html.png" id="html">
                <img src="images/comp icones/iconesnuages/indesign.png" id="indesign">
                <img src="images/comp icones/iconesnuages/animate.png" id="animate">
            
            </div>

        </div>

        <div class="slide" id="travaux">
            <h1>MES TRAVAUX</h1>
            
            <img src="images/illustrations dessin/1x/Fichier 1.png" id="dessintravaux">

            <button id="bttravaux"><a href="touslestravaux.html">Tous les travaux</a></button>


            <div id="grid-container2">
                <div>
                    <img src="images/illustrations dessin/postit.png" id="trav1">
                    <p>Ceci est une maquette que j'ai réalisée pendant mes cours à l'aide du logiciel Figma. Le but était de réaliser un site fictif sur une montagne au choix.</p>
                </div>
                <div>
                    <img src="images/illustrations dessin/postit.png" id="trav1">
                    <p>Ceci est une maquette que j'ai réalisée pendant mes cours à l'aide du logiciel Figma. Le but était de réaliser un site fictif sur une montagne au choix.</p>
                </div>
                <div>
                    <img src="images/illustrations dessin/postit.png" id="trav1">
                    <p>Ceci est une maquette que j'ai réalisée pendant mes cours à l'aide du logiciel Figma. Le but était de réaliser un site fictif sur une montagne au choix.</p>
                </div>
            
            </div>

            

            <!-- <img src="images/illustrations dessin/1x/Fichier 9.png" alt="sup" id="flèchetrav1">
            <img src="images/illustrations dessin/1x/Fichier 8.png" alt="sup" id="flèchetrav2"> -->

        </div>
        
        <div class="slide" id="contact">

            <div class="textcontact">
                <h1>CONTACTE-MOI!</h1>
                <p>Tu es intéressé par mon travail et tu souhaites me poser une question ou collaborer avec moi?
                    <br>
                Alors envoie moi un message en remplissant mon petit formulaire!</p>
            </div>

           

            <div class="form">
    
                
                    
                <form method="POST" action="traitement.php">
                
                    <div class="form-group">
                        <input type="text" id="nom" name="nom" placeholder="Ton nom">
                    </div>
                    <div class="form-group">
                        <input type="text" id="mail" name="mail" placeholder="Ton adresse mail">
                    </div>
                    <div class="form-group">
                        <input type="textarea" id="message" name="message" placeholder="Ton message">
                    </div>
                    <div class="form-group">
                        <input type="submit" id="envoyer" value="Envoyer">
                    </div>
                </form>
                <img src="images/illustrations dessin/Avion.png" id="avion">
            </div>

        </div>
        
        
        <div class="slide" id="footer">

            <div id="logotexte2">
                <img src="images/logo_1.png" alt="logo" id="logo2">
                <h2>FLORINE VANDENABEELE</h2>
                <h4>INFOGRAPHISTE</h4>
            </div>
           

        </div>
    

</body>
</html>