<?php
    session_start();
    $_SESSION['identifiant']='back_page';
    $DB_USER='rzesjkbihrnina';
    $DB_PASSWORD='868bdae7f766d6c6b875018358ae9bf477e603aa15639dd0a4fcbca0a3cf3f7f';
    $DB_DNS='pgsql:host=ec2-34-246-227-219.eu-west-1.compute.amazonaws.com;dbname=d3ubjdit7e0krk';
    
    
   
    try{

        $PDO=new PDO($DB_DNS,$DB_USER,$DB_PASSWORD);

        
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
