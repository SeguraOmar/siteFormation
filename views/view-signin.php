<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">

    <header>
        <nav class="shadow-2xl">
            <div class="flex items-center justify-between px-4 py-2">
                <!-- Texte à gauche -->
                <a href="../controllers/controller-home.php"><span class="text-2xl text-green-500 font-bold mr-2 font-mono">Fredd<span class="text-blue-500">y</span></span></a>


                <div class="flex items-center">
                    <!-- Liens de la navbar (Connexion, Inscription, etc.) -->
                    <a href="../controllers/controller-signin.php"><button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded m-2 font-mono">Connexion</button></a>
                    <a href="controller-signup.php"><button class="bg-gray-300 hover:bg-gray-400 text-blue-500 font-bold py-2 px-4 rounded ml-4 m-2 font-mono">Inscription</button></a>
                    <a href="../controllers/controller-profil.php"><img src="../assets/image/ImageParDéfaut.jpg" alt="Image de profil par défaut" class="w-8 h-8 rounded-full mr-2 m-3 hover:bg-gray-700"></a>
                </div>
            </div>
        </nav>
    </header>

    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Connexion</h2>

            <form action="controller-signin.php" method="POST" novalidate>
                <div class="mb-4">
                    <label for="user_email" class="block text-gray-700">Email :</label>
                    <input id="user_email" type="email" name="user_email" class="border border-gray-300 rounded-md p-3 w-full" value="<?= isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : '' ?>">
                    <span class="text-red-500">
                        <?= isset($errors['user_email']) ? $errors['user_email'] : '' ?>
                    </span>
                </div>

                <div class="mb-4">
                    <label for="user_password" class="block text-gray-700">Mot de passe :</label>
                    <input id="user_password" type="password" name="user_password" class="border border-gray-300 rounded-md p-3 w-full">
                    <span class="text-red-500">
                        <?= isset($errors['user_password']) ? $errors['user_password'] : '' ?>
                        <?= isset($errors['connexion']) ? $errors['connexion'] : ''  ?>
                    </span>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded">Valider</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        
    </footer>

</body>

</html>