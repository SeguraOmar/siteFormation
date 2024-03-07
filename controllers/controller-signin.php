<?php 

session_start();
$errors = [];

require_once '../models/utilisateur.php';
require_once '../config/config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($email)) {
        $errors[] = 'Veuillez saisir votre email';
    }

    if (empty($password)) {
        $errors[] = 'Veuillz saisir votre mot de passe';
    }

    // Si les champs email et mot de passe sont valides on commence les test 

    if (empty($errors)) {
        // Vérification de l'existence de l'email à l'aide de la méthode checkEmailExists dans la classe utilisateur
        if (!Utilisateur::checkEmailExists($_POST['email'])) {
            $errors[] = 'Utilisateur inconnu';
        } 
    }
}






include_once '../views/view-signin.php';












?>