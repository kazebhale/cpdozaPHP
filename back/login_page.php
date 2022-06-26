<?php
    session_start();
    $_SESSION['identifiant']='back_page';
    $DB_USER='root';
    $DB_PASSWORD='';
    $DB_DNS='mysql:host=localhost;dbname=dbcpdoza';


    try{
        $PDO=new PDO($DB_DNS,$DB_USER,$DB_PASSWORD);


        //if(isset($_POST['submit'])){

        $nom = htmlspecialchars($_POST['nom']);

        $prenom = htmlspecialchars($_POST['prenom']);

        $mdp = htmlspecialchars($_POST['mot_de_pass']);
        

        if($_SESSION['statut']=='etudiant'){

            $repV=$PDO->query("SELECT *FROM eleve WHERE nomEleve='$nom' AND prenomEleve='$prenom' AND motDePasse='$mdp';");

            $reponse = $repV->fetchAll(PDO::FETCH_ASSOC);
        }
        else if($_SESSION['statut']='parent'){
            $repV=$PDO->query("SELECT *FROM parent WHERE nomParent='$nom' AND prenomParent='$prenom' AND motDePasse='$mdp';");

            $reponse = $repV->fetchAll(PDO::FETCH_ASSOC);
        }


        $error="mot de passe ou nom incorrect";
        $_SESSION['erreur']=$error;
        if($reponse){
            
            $error="";

            $_SESSION['erreur']=$error;

            header('Location:prive/private_index.php');
        }
        else{
            
            if($_SESSION['statut']=='etudiant'){

                header('Location:../connexionEtudiant.php');
            }
            else{
                /*echo "*****";
                echo $_SESSION['erreur'];
                echo $_SESSION['statut'];*/
                header('Location:../connexionParent.php');
            }
        }

        
    }
    catch(PDOException $e){
        echo 'ERREUR '.$e->getMessage();
    }

?>