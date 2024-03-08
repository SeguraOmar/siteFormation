<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold mb-4">Connexion</h2>
    
        <form action="controller-signin.php" method="POST" novalidate>
            <div class="mb-4">
                <label for="user_email" class="block text-gray-700">Email :</label>
                <input id="user_email" type="email" name="user_email" class="border border-gray-300 rounded-md p-2 w-full" value="<?= isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : '' ?>">
                <span class="text-red-500">
                    <?= isset($errors['user_email']) ? $errors['user_email'] : '' ?>
                </span>
            </div>
        
            <div class="mb-4">
                <label for="user_password" class="block text-gray-700">Mot de passe :</label>
                <input id="user_password" type="password" name="user_password" class="border border-gray-300 rounded-md p-2 w-full">
                <span class="text-red-500">
                    <?= isset($errors['user_password']) ? $errors['user_password'] : '' ?>
                </span>
            </div>
        
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Valider</button>
            <a href="../controllers/controller-signup.php" class="ml-2"><button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Inscription</button></a>
        </form>
    </div>
</body>
</html>