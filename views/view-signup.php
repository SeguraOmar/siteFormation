<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue inscription</title>
</head>

<body>

    <h2>Inscription</h2>

    <form action="controller-signup.php" method="POST" novalidate>
        <div>
            <label for="user_lastname">Nom :</label>
            <input id="user_lastname" type="text" name="user_lastname" class="validate" value="<?= isset($_POST['user_lastname']) ? htmlspecialchars($_POST['user_lastname']) : '' ?>">
            <span>
                <?= isset($errors['user_lastname']) ? $errors['user_lastname'] : '' ?>
            </span>
        </div>

        <div>
            <label for="user_firstname">Prénom :</label>
            <input id="user_firstname" type="text" name="user_firstname" class="validate" value="<?= isset($_POST['user_firstname']) ? htmlspecialchars($_POST['user_firstname']) : '' ?>">
            <span>
                <?= isset($errors['user_firstname']) ? $errors['user_firstname'] : '' ?>
            </span>
        </div>

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


        <div>
            <label for="confirm_password">Confirmer le mot de passe :</label>
            <input id="confirm_password" type="password" name="confirm_password" class="validate">
            <span>
                <?= isset($errors['confirm_password']) ? $errors['confirm_password'] : '' ?>
            </span>
        </div>

        <button type="submit">Valider</button>
        <a href="../controllers/controller-signin.php"><button type="button">Connexion</button></a>


    </form>

</body>

</html>