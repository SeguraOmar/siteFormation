<?php

require_once '../config/config.php';
require_once '../models/utilisateur.php';


// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    // Vérification du nom
    if (empty($_POST['lastname'])) {
        $errors['lastname'] = 'Veuillez saisir votre nom';
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST['lastname'])) {
        $errors['lastname'] = 'Le nom ne peut contenir que des lettres';
    }

    // Vérification du prénom 
    if (empty($_POST['firstname'])) {
        $errors['firstname'] = 'Veuillez saisir votre prénom';
    } else if (!preg_match("/^[a-zA-ZÀ-ÿ\-]+$/", $_POST['firstname'])) {
        $errors['firstname'] = 'Le prénom ne peut contenir que des lettres';
    }

    // Vérification de l'email
    if (empty($_POST['email'])) {
        $errors['email'] = 'Veuillez saisir votre email';
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Veuillez saisir un email valide';
    } else {
        $email = Utilisateur::checkEmailExists($_POST['email']);
        if ($email) {
            $errors['email'] = 'Cet email est déjà utilisé';
        }
    }

    // Vérification du mot de passe
    if (empty($_POST['password'])) {
        $errors['password'] = 'Veuillez saisir votre mot de passe';
    } else if (strlen($_POST['password']) < 8) {
        $errors['password'] = 'Le mot de passe doit contenir au moins 8 caractères';
    }
    
   // Si la variable $errors est vide alors on continue

    if (empty($errors)) {
     try {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `utilisateur` (`Nom`, `Prénom`, `Email`, `Mot_de_passe`) VALUES (:lastname, :firstname, :email, :password)";

        $query = $db->prepare($sql);

        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = $_POST['email'];
        $password = $_POST['password'];

        Utilisateur::create($lastname, $firstname, $email, $password);
    } catch (PDOException $e) {
        // Utilisation de throw pour lancer une exception
        throw new Exception("Erreur lors de l'inscription : " . $e->getMessage());
    }
}
}

include_once '../views/view-signup.php';
exit;
?>

