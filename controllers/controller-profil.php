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

// Récupérer les informations de l'utilisateur depuis la session
$user = $_SESSION['user'];

$nom = $user['user_lastname'];
$prenom = $user['user_firstname'];
$email = $user['user_email'];
$description = $user['user_description'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete']) && $_POST['delete'] === 'delete') {
        // Supprimer l'utilisateur
        Utilisateur::deleteUser($user['ID_utilisateur']);
        
        // Déconnecter l'utilisateur en supprimant les données de session
        unset($_SESSION['user']);
        
        // Rediriger vers la page de connexion
        header('Location: controller-home.php');
        exit();
    }

    if (isset($_POST['modifier']) && $_POST['modifier'] === 'modifier') {
        $user_photo = isset($_FILES['user_photo']) ? $_FILES['user_photo']['name'] : null;

        // Mettre à jour les champs modifiés
        $user['user_lastname'] = $_POST['user_lastname'] ?? $user['user_lastname'];
        $user['user_firstname'] = $_POST['user_firstname'] ?? $user['user_firstname'];
        $user['user_email'] = $_POST['user_email'] ?? $user['user_email'];
        $user['user_description'] = $_POST['user_description'] ?? $user['user_description'];

        // Mettre à jour la photo de profil si une nouvelle photo est téléchargée
        if (!empty($user_photo)) {
            $user['user_photo'] = $user_photo;
        }

        // Mettre à jour l'utilisateur dans la session
        $_SESSION['user'] = $user;

        // Modifier l'utilisateur dans la base de données
        Utilisateur::modifier(
            $user['ID_utilisateur'],
            $user['user_lastname'],
            $user['user_firstname'],
            $user['user_email'],
            $user['user_description'],
            $user['user_photo']
        );
        
        // Rediriger vers la page de profil
        header('Location: controller-profil.php');
        exit();
    }
}

// Si l'utilisateur est toujours connecté, inclure la vue du profil
include_once '../views/view-profil.php';
?>
