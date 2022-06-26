<?php
    session_start();
    $_SESSION['identifiant']='back_page';
    $DB_USER='nhhuejkaqfqkmu';
    $DB_PASSWORD='0a46fa83c943391e500fe4cccb46bddb2041781439f7e23062b39429d315ce4c';
    $DB_DNS='pgsql:host=ec2-44-205-41-76.compute-1.amazonaws.com;port=5432;dbname=d58e6ica4sh50p';
    
    
   
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