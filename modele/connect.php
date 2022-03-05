<?php 
require_once('functions.php');
if( isset( $_POST['_action'] ) ){
    if( $_POST['_action'] == 'connect_membre'){
        if( !empty( $_POST['email']) && !empty( $_POST['passwd']) ){
            $email = htmlspecialchars( $_POST['email'] );
            $password = htmlspecialchars( md5( sha1( $_POST['passwd'] )) );
            $isPortfolio = isPortfolio( $email, $password );
            if( $isPortfolio != -1 ){
                $_SESSION['idusers'] = $isPortfolio;
                // Redirection vers page membre
                header('Location: ../portfolio/admin/');
                exit;
            }else{
                // Redirection vers connection
                header('Location: ../portfolio/connexion/?error');
                exit;
            }
        }else{
            // Redirection vers connection
            header('Location: ../portfolio/connexion/?error');
            exit;
        }
    }else if($_POST['_action'] == 'delete'){
        $id_folio = htmlspecialchars($_POST['iddel']);
        $ok = delete_folio( $id_folio );
        if($ok){
            header('Location: ../portfolio/admin/?success');
            exit;
        }else{
            header('Location: ../portfolio/admin/?error');
            exit;
        }
    }else{
        // Redirection vers connection
        header('Location: ../portfolio/connexion/?error');
        exit;
    }
}else{
    // Redirection vers connection
    header('Location: ../portfolio/connexion/?error');
    exit;
}