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
                    <img src="images/illustrations/logo.png" alt="logo" id="logo">
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
                    <img src="images/illustrations/moinoir.svg" id="imggauche">
                </div>
                <div id="droite">
                    <img src="images/illustrations/titre.png" id="imgdroite">
                </div>

                <!-- <button><a href="#travaux">Découvre mes travaux</a></button> -->
                <!-- <button><a href="#contact">Contacte-moi</a></button> -->

        </div>

        <div class="slide" id="bio">


            <img src="images/illustrations/vague.png" alt="vague" id="vague">

            <div class="wrapper">
                
                    
                    <h1>BIOGRAPHIE</h1>

                    <div class="textebio">

                        <p> Salut! Je m'appelle Florine! </p>
                            <br>
                        <p> Je suis une étudiante de 23 ans de la région      d'Ath. Je suis actuellement en BAC2 en techniques graphiques à l'EPSE de Marcq, Enghien.</p>
                            <br>
                    <p> Tu veux en savoir plus sur moi? Clique ici!</p>

                    </div>
  
            </div>

            <button><a href="biobis.php">Go!</a></button>
            <img src="images/illustrations/tap.png" id="tap">
            
            <img src="images/illustrations/moibio.png" alt="moibio" id="moibio">

        </div>

        <div class="slide" id="comp">

            <h1>MES COMPETENCES</h1>

            <div id="grid-container4">


                <img src="images/compicones/iconesnuages/illu.png" id="ai">
                <img src="images/compicones/iconesnuages/photoshop.png" id="pts">
                <img src="images/compicones/iconesnuages/after.png" id="after">
                <img src="images/compicones/iconesnuages/css.png" id="css">
                <img src="images/compicones/iconesnuages/figma.png" id="figma">
                <img src="images/compicones/iconesnuages/html.png" id="html">
                <img src="images/compicones/iconesnuages/indesign.png" id="indesign">
                <img src="images/compicones/iconesnuages/anim.png" id="animate">
                <img src="images/compicones/iconesnuages/aud.png" id="aud">
            
            </div>

        </div>

        <div class="slide" id="travaux">

            <img src="images/illustrations/vague.png" alt="vague" id="vague">

            <h1>MES TRAVAUX</h1>
            
            <img src="images/illustrations/giftravaux" id="dessintravaux">

            <button id="bttravaux"><a href="touslestravaux.php">Tous les travaux</a></button>


            <div id="grid-container2">
                <div>
                    <img src="images/illustrations/postit.png" id="trav1">
                    <p>Ceci est une maquette que j'ai réalisée pendant mes cours à l'aide du logiciel Figma. Le but était de réaliser un site fictif sur une montagne au choix.</p>
                </div>
                <div>
                    <img src="images/illustrations/postit.png" id="trav1">
                    <p>Ceci est une maquette que j'ai réalisée pendant mes cours à l'aide du logiciel Figma. Le but était de réaliser un site fictif sur une montagne au choix.</p>
                </div>
                <div>
                    <img src="images/illustrations/postit.png" id="trav1">
                    <p>Ceci est une maquette que j'ai réalisée pendant mes cours à l'aide du logiciel Figma. Le but était de réaliser un site fictif sur une montagne au choix.</p>
                </div>
            
            </div>


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
                <img src="images/illustrations/avioncontact.png" id="avion">
            </div>

        </div>
        
        
        <div class="slide" id="footer">


            <img src="images/illustrations/vague.png" alt="vague" id="vague">

            <div id="video-fond">
                <video src="images/illustrations/FRESIGN.mp4" type="video/mp4" autoplay muted>
            </video>
        </div>

        </div>
    

</body>
</html>