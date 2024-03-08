<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
</head>
<body>
    
    <h2>Connexion</h2>
    
    <form action="controller-signin.php" method="POST" novalidate>
        <div>
            <label for="user_email">Email :</label>
            <input id="user_email" type="email" name="user_email" class="validate" value="<?= isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : '' ?>">
            <span>
                <?= isset($errors['user_email']) ? $errors['user_email'] : '' ?>
            </span>
        </div>
        
        <div>
            <label for="user_password">Mot de passe :</label>
            <input id="user_password" type="password" name="user_password" class="validate">
            <span>
                <?= isset($errors['user_password']) ? $errors['user_password'] : '' ?>
            </span>
        </div>
        
        <button type="submit">Valider</button>
        <a href="../controllers/controller-signup.php"><button type="button">Inscription</button></a>
    </form>
</body>
</html>