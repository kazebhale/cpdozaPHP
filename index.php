<?php 
    session_start();
    $_SESSION['erreur']="";
    $_SESSION['statut']="etudiant";
    $_SESSION['identifiant']="index_page";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="src/img/logo-d-éducation-emblècopieeeeent-école-colle-119754198.jpg">
    <title>Accueil CPDOZA</title>
    <link rel="stylesheet" href="src/style.css">
</head>
<body>
    <header>
        <div class="tubeP"></div>
        <div class="ecole">
            <div class="logo">
                <img src="src/img/logo-d-éducation-emblècopieeeeent-école-colle-119754198.jpg" alt="">
            </div>
            <div class="statut">
                <a href="connexionEtudiant.php"><button >Espace Privé</button></a>
            </div> 
        </div>
        <div class="nav">
            <nav>
                <ul class="mes_listes">
                    <li class="menu-css"><a href="#">accueil</a>
                        <ul class="submenu">
                            <li><a href="#">contact</a></li>
                            <li><a href="#">actualités</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-css"><a href="">Espace élèves</a>
                        <ul class="submenu">
                            <li><a href="html.html">Règlements interieurs</a></li>
                            <li><a href="#">Calendrier scolaire</a></li>
                            <li><a href="#">Manuels et livres recommandés</a></li>
                            <li><a href="#">Programme scolaire</a></li>
                        </ul>
                    </li>
                    <li class="menu-css"><a href="">Espaces parents d'élèves</a>
                        <ul class="submenu">
                            <li><a href="#">Préparation de la rentrée scolaire</a></li>
                            <li><a href="#">Conditions d'admission</a></li>
                            <li><a href="#">Frais de scolarité</a></li>
                            <li><a href="#">Réunion des parents</a></li>
                            <li><a href="#">Comité de parents</a></li>
                        </ul>
                    </li>
                    <li class="menu-css"><a href="">Vie scolaire</a>
                        <ul class="submenu">
                            <li><a href="#">Clubs</a></li>
                            <li><a href="#">Fête scolaire</a></li>
                            <li><a href="#">Activités citoyennes</a></li>
                        </ul>
                    </li>
                    <li class="menu-css"><a href="">Galérie et document</a>
                        <ul class="submenu">
                            <li><a href="#">Photos</a></li>
                            <li><a href="#">Audio /vidéo</a></li>
                            <li><a href="#">Fichier archive</a></li>
                        </ul>
                    </li>
                    <li class="menu-css"><a href="">Communication</a>
                        <ul class="submenu">
                            <li><a href="#">Formulaire de contact</a></li>
                            <li><a href="#">Chat</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Posez vos questions</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
    <div class="bienvenu">
        <div class="texte">
            <div class="message-bienvenu">Bienvenue  au COLLEGE MODERNE CP-DOZA</div>
        </div>
        <div class="caroselle">
            <div class="diapo">
            </div>
            <div class="banniere">
                <div class="conteneurAc">
                    <div class="e-learning" onclick="window.open('/www.google.com')">
                        <div><p id="majuscule">E-LEARNING </p> <br> <p id="minuscule">Acceder à notre <br> plateforme<br> de e-learning</p></div>
                        <img src="src/img/e-learn.jpg" alt="" width="240" height="180">
                    </div>
                </div>
                
                <div class="conteneurAc">
                    <div class="preinscription">
                        <div class="en-ligne"><p>PREINSCRIPTION EN LIGNE</p> </div>
                        <img src="src/img/491898-PHL1YD-219.jpg" alt=""  >
                    </div>
                </div>
                <div class="conteneurAc"> 
                    <div class="entrer-cour">
                        <p id="titre">CEREMONIE D'ENTRER <br> A CP-DOZA </p><br>
                        <p id="dateRentrer"> SEPTEMBRE 2022 </p>
                    </div>
                </div>
                
            </div>
        </div>

 
    </div>


    <div class="espace">
    </div>

    <div class="evenement">

        <div class="extraEvent">
            <div class="titre_actua"> <p> EVENEMENTS</p></div>
            <div class="contenu-event">
                <img src="src/img/partenaire.jpg" alt="" width="100" height="80">
                <div class="event-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Voluptatem eos consequatur a voluptatum <br> sit eius dicta est eveniet voluptatibus amet, laborum
                </div>
            </div>
        </div>
        <div class="espace1"></div>
        <div class="actualite">
            <div class="titreActualite"><p> ACTUALITE </p></div>
            <div class="contenu-event" >
                <img src="src/img/actualite.jpg" alt="" width="100" height="80">
                <div class="event-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Voluptatem eos consequatur a voluptatum <br> sit eius dicta est eveniet voluptatibus amet, laborum
                </div>
            </div>

        </div>
        <div class="espace1"></div>
        <div class="eventAvenir">
            <div class="titreAvenir"> <p> A VENIR</p></div>
            <div class="contenu-event">
                <img src="src/img/partenaire-nat-logo.jpg" alt="" width="100" height="80">
                <div class="event-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Voluptatem eos consequatur a voluptatum <br> sit eius dicta est eveniet voluptatibus amet, laborum
                </div>
            </div>

        </div>
    </div>
    

    <footer>

        <div class="bas">
            <div class="repetCont">
                <img src="src/img/logo-d-éducation-emblècopieeeeent-école-colle-119754198.jpg" alt="" width="60" height="60">
                <span>CP-DOZA</span>
                <p>collège moderne cp-doza</p>
            </div>
            <div class="plan-site">
                
            </div>
            <div class="informationSite">

            </div>
        </div>
    </footer>
    


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(function(){
			$(".tubeP").load("contact.html") 
            $(".diapo").load("indexCaroselle.html")

        });
    </script>
</body>
</html>