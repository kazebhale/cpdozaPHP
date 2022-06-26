<?php 
	session_start();
	$_SESSION['statut']='etudiant';/* identifiant de page me permet de retrouver dans les nombreuses page et decider la valeur de erreur*/
	if($_SESSION['identifiant']!='back_page'){
		$_SESSION['erreur']="";
	}
	$_SESSION['identifiant']='etudiant_page';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="src/img/logo-d-éducation-emblècopieeeeent-école-colle-119754198.jpg">
	<link rel="stylesheet" href="src/connexion.css">
	<title>connexion etudiant</title>
</head>
<body>
	<div class="tubeP"></div>
	<div class="espace">

	</div>
	<h2 style="text-align:center;">veuillez entrer vos identifiants de l'école</h2>
	<div class="connexion">
		<div class="formP">

			<div class="partie_etudiant">
				<div class="titre1"><h2>Elève</h2></div>
				<div class="formDesign">
					<div class="formulaire"></div>
					
				</div>
			</div>
            <div class="image1">
                <img src="src/img/etude.jpg" alt="" width="600" height="650">
            </div>
		</div>
	</div>
    <div class="lienParent" style="text-align:center ;">
        <a href="connexionParent.php">Parent d'élèves</a>
    </div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(function(){
			$(".tubeP").load("contact.html")
            $(".formulaire").load("form.php"); 

        });
    </script>
</body>
</html>