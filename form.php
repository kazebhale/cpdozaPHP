<?php 
    session_start();
    $_SESSION['identifiant']='form_page';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/form.css">
    <title>Document</title>
</head>
<body>
    <div class="le_blanc">
            <div class="formulaire">
                <div class="form">
                    <form action="back/login_page.php" method="POST">
                        <div class="les_infos">
                            <div class="le_nom">
                                <p>Nom</p>
                                <input type="text" name="nom" id="nom_entreprise" placeholder="" class="connect" required >
                                <p>Prénom</p>
                                <input type="text" name="prenom" id="prenom" placeholder="" class="connect">
                            </div>
                            <div class="le_pass">
                                <p>Mot de passe</p>
                                <input type="password" name="mot_de_pass" id="mot_de_passe" placeholder="" class="connect" required>
                            </div><br>
                            <div class="mot_de_passe_oublie">
                                <a href="recuperation.html">Mot de passe oublier</a>
                            </div>
                        </div>
                        <div class="envoyer">
                            <input type="submit" name="connecter" class="connecter" value="connecter"> 
                        </div>
                        <?php if($_SESSION['erreur'] !=""){ echo "<p id='erreur' >identifiants sont incorrects </p>";} ?>
                    </form>
                    <br><br>
                    <div class="erreur"></div>
                </div>
            </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</html>