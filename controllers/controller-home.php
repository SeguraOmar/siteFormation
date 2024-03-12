<?php 

require_once '../config/config.php';
require_once '../models/utilisateur.php';

session_start();

if(isset($_SESSION['user'])) {
    // Insérer une date au format français
    $date = new \DateTime();
} else  {

header('Location: ./controller_signin.php');

}

include_once '../views/view-home.php';