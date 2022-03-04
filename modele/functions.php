<?php
//Ici sera defini l'ensemble des functions
session_start();

try {
    $connexion = new PDO('mysql:host=localhost;dbname=portfolio', "root", "");
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