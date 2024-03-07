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
        <label for="username">Nom :</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" required><br><br>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Valider">
    </form>

</body>
</html>
