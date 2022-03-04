<?php 
require_once('functions.php');
if(isset( $_POST['action'] ) ){
    if(  $_POST['action'] ==  'newfolio' ){
        if( (!empty($_POST['lien'])) && (!empty($_FILES['img'])) ){
            $image = $_FILES['img'];
            $lien = htmlspecialchars($_POST['lien']);
            $title = htmlspecialchars($_POST['titre']);
            $img_name = save_img_folio( $image );
            $tab = [$lien, $img_name, $title];
            if( $img_name != '' ){
                $ok = insertion($tab, 'newfolio');
                if ($ok){
                    header('Location: ../portfolio/admin/?success');
                    exit;
                }else{
                    header('Location: ../portfolio/admin/?error');
                    exit; 
                }
            }else{
                header('Location: ../portfolio/admin/?error');
                exit; 
            }
        }else{
            header('Location: ../portfolio/admin/?error');
            exit; 
        }
    }else if( $_POST['action'] == 'newcompetence'){
        if(!empty($_POST['competence'])){
            $competence = htmlspecialchars($_POST['competence']);
            $tab = [1, $competence];
            $ok = insertion($tab, 'newcompetence');
            if ($ok){
                header('Location: ../portfolio/admin/?success');
                exit;
            }else{
                header('Location: ../portfolio/admin/?error');
                exit; 
            }
        }else{
            header('Location: ../portfolio/admin/?error');
            exit;    
        }
    }else if( $_POST['action'] == 'newentrprise'){
        if(!empty($_POST['nom']) AND !empty($_POST['adresse'])){
            $nom = htmlspecialchars($_POST['nom']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $tab = [1, $nom, $adresse];
            $ok = insertion($tab, 'newentrprise');
            if ($ok){
                header('Location: ../portfolio/admin/?success');
                exit;
            }else{
                header('Location: ../portfolio/admin/?error');
                exit; 
            }
        }else{
            header('Location: ../portfolio/admin/?error');
            exit;
        }
    }else if( $_POST['action'] == 'newcompetencepro'){
        if(!empty($_POST['tache']) AND !empty($_POST['choix']) AND !empty($_POST['datedeb']) AND !empty($_POST['datefin'])){
            $tache = htmlspecialchars($_POST['tache']);
            $choix = htmlspecialchars($_POST['choix']);
            $datedeb = htmlspecialchars($_POST['datedeb']);
            $datefin = htmlspecialchars($_POST['datefin']);
            $tab = [$choix, $tache, $datedeb, $datefin];
            $ok = insertion($tab, 'newcompetencepro');
            if ($ok){
                header('Location: ../portfolio/admin/?success');
                exit;
            }else{
                header('Location: ../portfolio/admin/?error');
                exit; 
            }
           
        }else{
            header('Location: ../portfolio/admin/?error');
            exit;
        }
    }else{
        header('Location: ../portfolio/admin/?error');
        exit;
    }
}else{
    // Redirection vers connection
    header('Location: ../portfolio/admin/?error');
    exit;
}