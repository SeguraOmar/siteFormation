<?php
session_start();

require_once '../config/config.php';
require_once '../models/utilisateur.php';

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    // Rediriger vers la page de connexion avec un message d'erreur
    $_SESSION['error'] = "Vous devez être connecté pour accéder au profil";
    header('Location: controller-home.php');
    exit();
}

if (isset($_SESSION['user'])) {
    $ID_utilisateur = $_SESSION['user']['ID_utilisateur'];
    $prenom = $_SESSION['user']['user_firstname'];
    $nom = $_SESSION['user']['user_lastname'];
    $email = $_SESSION['user']['user_email'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete']) && $_POST['delete'] === 'delete') {
        // Supprimer l'utilisateur
        Utilisateur::deleteUser($_SESSION['user']['ID_utilisateur']);
        
        // Déconnecter l'utilisateur en supprimant les données de session
        unset($_SESSION['user']);
        
        // Rediriger vers la page de connexion
        header('Location: controller-home.php');
        exit();
    }
}

// Si l'utilisateur est toujours connecté, inclure la vue du profil
include_once '../views/view-profil.php';
?>












