<?php

require_once '../config/config.php';
require_once '../models/utilisateur.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    // Vérification du nom
    if (empty($_POST["user_lastname"])) {
        $errors["user_lastname"] = "Le nom est obligatoire.";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-\d ]+$/" , $_POST["user_lastname"])) {
        $errors["user_lastname"] = "Le nom n'est pas valide.";
    }

    // Vérification du prénom
    if (empty($_POST["user_firstname"])) {
        $errors["user_firstname"] = "Le prénom est obligatoire.";
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-\d ]+$/" , $_POST["user_firstname"])) {
        $errors["user_firstname"] = "Le prénom n'est pas valide.";
    }

    // Vérification de l'email 
    if (empty($_POST["user_email"])) {
        $errors["user_email"] = "L'email est obligatoire.";
    } else if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
        $errors["user_email"] = "L'email n'est pas valide.";
    } 

    // Vérification du mot de passe 
    if (empty($_POST["user_password"])) {
        $errors["user_password"] = "Le mot de passe est obligatoire.";
    } else if (strlen($_POST["user_password"]) < 8) {
        $errors["user_password"] = "Le mot de passe doit contenir au moins 8 caractères.";
    }

    if (empty($errors)) {

        try {
             
            $user_lastname = $_POST["user_lastname"];
            $user_firstname = $_POST["user_firstname"];
            $user_email = $_POST["user_email"];
            $user_password = $_POST["user_password"];

            Utilisateur::create($user_lastname, $user_firstname, $user_email, $user_password);
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }

        
    }
    
    
}

include_once '../views/view-signup.php';
exit();


?>

