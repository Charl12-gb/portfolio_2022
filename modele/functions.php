<?php
//Ici sera defini l'ensemble des functions
session_start();

try {
    $connexion = new PDO('mysql:host=localhost;dbname=potfolio', "root", "");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage();
    die();
}

/**
 * Connexion
 *
 * @return PDO
 */
function connect(): PDO
{
    global $connexion;
    return $connexion;
}

function isPortfolio( String $email, String $password):int{
    $sql = connect()->prepare("SELECT * FROM users WHERE email =:email AND pwd =:passwd");
    $sql->execute( array(
        'email' => $email, 
        'passwd' =>$password
    ));
    $result = $sql->fetch();
    $sql->closeCursor();
    if ($result != null) return $result['id'];
    else return -1;
}

function get_folio( ):array{
    $sql = connect()->prepare("SELECT * FROM folio");
    $sql->execute();
    $result = $sql->fetchAll();
    $sql->closeCursor();
    if ($result != null) return $result;
    else return array();
}

function get_users( ):array{
    $sql = connect()->prepare("SELECT * FROM users WHERE id = :id");
    $sql->execute(array('id' => 1));
    $result = $sql->fetch();
    $sql->closeCursor();
    if ($result != null) return $result;
    else return array();
}

function get_name( ):String{
    $user_name = get_users();
    if ($user_name != null) return $user_name['nom'].' '.$user_name['prenom'];
    else return '';
}

function get_link_img( ):String{
    $link = get_users();
    if ($link != null) return $link['lien'];
    else return '';
}

function get_descriptions():String{
    $description = get_users();
    if ($description != null) return $description['description'];
    else return '';
}

function get_email():String{
    $email = get_users();
    if ($email != null) return $email['email'];
    else return '';
}

function get_competence():array{
    $sql = connect()->prepare("SELECT * FROM competence WHERE id_users = :id");
    $sql->execute(array('id' => 1));
    $result = $sql->fetchall();
    $sql->closeCursor();
    if ($result != null) return $result;
    else return array();
}

function get_entreprise():array{
    $sql = connect()->prepare("SELECT * FROM entreprise WHERE id_users = :id");
    $sql->execute(array('id' => 1));
    $result = $sql->fetchAll();
    $sql->closeCursor();
    if ($result != null) return $result;
    else return array();
}


function get_competence_pro(int $id_entreprise):array{
    $sql = connect()->prepare("SELECT * FROM competence_pro WHERE id_entreprise = :id");
    $sql->execute(array('id' => $id_entreprise));
    $result = $sql->fetchAll();
    $sql->closeCursor();
    if ($result != null) return $result;
    else return array();
}