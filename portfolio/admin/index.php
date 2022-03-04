<?php 
if( !isset( $_SESSION['idusers'] ) ){
    require_once('../../modele/functions.php');
}
if( !isset( $_SESSION['idusers'] ) ){
    header( 'Location:../../portfolio/connexion/');
    exit;
}else{
    include_once('../../vue/partie/header.php');
    include_once('../../vue/content/admin-espace.php');
    include_once('../../vue/partie/footer.php');
}