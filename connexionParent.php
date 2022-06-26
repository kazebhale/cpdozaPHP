<?php 
	session_start();
	$_SESSION['statut']='parent';
	if($_SESSION['identifiant']!="back_page"){
		$_SESSION['erreur']="";
	}
	$_SESSION['identifiant']='parent_page';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="src/connexion.css">
	<link rel="shortcut icon" href="src/img/logo-d-éducation-emblècopieeeeent-école-colle-119754198.jpg">
	<title>connexion des parents</title>
</head>
<body>
	<div class="tubeP"></div>
	<div class="connexion">
		<div class="espace">
		
		</div>
		<h2 style="text-align:center;">veuillez entrer vos identifiants de l'école</h2>
		<div class="formP">

			<div class="partie_parent">
				<div class="titre2"><h2>Parent</h2></div>
				<div class="formDesign">
					<div class="formulaire">
					</div>
				</div>
			</div>
			<div class="image2">
				<img src="src/img/parents.webp" alt="" width="600" height="650">
			</div>
		</div>
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