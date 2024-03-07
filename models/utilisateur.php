<?php

class Utilisateur {
  /**
     * Méthode permettant de créer un utilisateur
     *
     * @param string $lastname       Nom de l'utilisateur
     * @param string $firstname      Prénom de l'utilisateur
     * @param string $email          Adresse mail de l'utilisateur
     * @param string $password       Mot de passe de l'utilisateur
     */
    public static function create(string $lastname, string $firstname, string $email, string $password) {
        try {
            // Requête SQL pour insérer un utilisateur
            $sql = "INSERT INTO `utilisateur`(`Nom`, `Prénom`, `Email`, `Mot_de_passe`) VALUES (:lastname, :firstname, :email, :password)";
    
            // Création de l'objet PDO pour la connexion à la BDD
            $db = new PDO('mysql:host=localhost;dbname=' . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // Préparation de la requête pour éviter les injections SQL 
            $query = $db->prepare($sql);
    
            // On relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue 
            $query->bindValue(':lastname', htmlspecialchars($lastname), PDO::PARAM_STR);
            $query->bindValue(':firstname', htmlspecialchars($firstname), PDO::PARAM_STR);
            $query->bindValue(':email', htmlspecialchars($email), PDO::PARAM_STR);
            // Password_default permet à PHP de s'adapter automatiquement pour sécuriser le mot de passe de l'utilisateur 
            $query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
    
            // Execution de la requête 
            $query->execute();
        } catch (PDOException $e) {
            // Utilisation de throw pour lancer une exception
            throw new PDOException($e->getMessage());
        }
    }
/**
 * Méthode permettant de récupérer les informations d'un utilisateur avec son email comme paramètre
 * 
 * @param string $email Adresse mail de l'utilisateur
 * 
 * @return string
 */
    public static function checkEmailExists(string $email): string
    {
        // le try and catch permet de gérer les erreurs, nous allons l'utiliser pour gérer les erreurs liées à la base de données
        try {
            // Création d'un objet $db selon la classe PDO
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

            // stockage de ma requete dans une variable
            $sql = "SELECT * FROM `utilisateur` WHERE `Email` = :email";

            // je prepare ma requête pour éviter les injections SQL
            $query = $db->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':email', $email, PDO::PARAM_STR);

            // on execute la requête
            $query->execute();

            // on récupère le résultat de la requête dans une variable
            $result = $query->fetch(PDO::FETCH_ASSOC);

            return json_encode($result);

            // on vérifie si le résultat est vide car si c'est le cas, cela veut dire que l'email n'existe pas
            if (empty($result)) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }
}
?>
