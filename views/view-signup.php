<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue inscription</title>
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
            <h2 class="text-2xl font-bold mb-4">Inscription</h2>

            <form action="controller-signup.php" method="POST" novalidate>
                <div class="mb-4">
                    <label for="user_lastname" class="block">Nom :</label>
                    <input id="user_lastname" type="text" name="user_lastname" class="border border-gray-300 rounded px-4 py-2 w-full" value="<?= isset($_POST['user_lastname']) ? htmlspecialchars($_POST['user_lastname']) : '' ?>">
                    <span class="text-red-500">
                        <?= isset($errors['user_lastname']) ? $errors['user_lastname'] : '' ?>
                    </span>
                </div>

                <div class="mb-4">
                    <label for="user_firstname" class="block">Prénom :</label>
                    <input id="user_firstname" type="text" name="user_firstname" class="border border-gray-300 rounded px-4 py-2 w-full" value="<?= isset($_POST['user_firstname']) ? htmlspecialchars($_POST['user_firstname']) : '' ?>">
                    <span class="text-red-500">
                        <?= isset($errors['user_firstname']) ? $errors['user_firstname'] : '' ?>
                    </span>
                </div>

                <div class="mb-4">
                    <label for="user_email" class="block">Email :</label>
                    <input id="user_email" type="email" name="user_email" class="border border-gray-300 rounded px-4 py-2 w-full" value="<?= isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : '' ?>">
                    <span class="text-red-500">
                        <?= isset($errors['user_email']) ? $errors['user_email'] : '' ?>
                    </span>
                </div>

                <div class="mb-4">
                    <label for="user_password" class="block">Mot de passe :</label>
                    <input id="user_password" type="password" name="user_password" class="border border-gray-300 rounded px-4 py-2 w-full">
                    <span class="text-red-500">
                        <?= isset($errors['user_password']) ? $errors['user_password'] : '' ?>
                    </span>
                </div>

                <div class="mb-4">
                    <label for="confirm_password" class="block">Confirmer le mot de passe :</label>
                    <input id="confirm_password" type="password" name="confirm_password" class="border border-gray-300 rounded px-4 py-2 w-full">
                    <span class="text-red-500">
                        <?= isset($errors['confirm_password']) ? $errors['confirm_password'] : '' ?>
                    </span>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Valider</button>
                <a href="../controllers/controller-signin.php" class="ml-2"><button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-700 font-bold py-2 px-4 rounded">Connexion</button></a>
            </form>
        </div>
    </div>
</body>

</html>