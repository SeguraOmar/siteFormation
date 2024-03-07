<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
<form action="controller-signin.php" method="post" novalidate>
    
<label for="email">Email:
    <?php 
 // Vérifie si l'email a été soumis et s'il est vide

  if (isset($_POST['email']) && empty ($_POST['email'])) {
      echo 'Champ obligatoire';
    }
    ?>
</label><br>
<input type="text" id="Email" name="Email" value="<?php echo htmlspecialchars($email ?? ''); ?>">
</span><br>


<label for="password">Mot de passe:
            <?php
            // Vérifie si le pseudo a été soumis et s'il est vide
            if (isset($_POST['Email']) && empty($_POST["password"])) {
                echo '<span style="color: red;">Champ obligatoire.</span>';
            }
            ?>
        </label><br>
        <input type="password" id="password" name="password" value="">
        </span><br><br>

        <!-- Affichage des erreurs de connexion -->
        <p><?= $errors["connexion"] ?? "" ?></p>

        <!-- Bouton de soumission -->
        <input type="submit" value="Se connecter">
        <a href="../controllers/controller-signup.php"><button type="button">S'inscrire</button></a>
    </form>

</body>
</html>