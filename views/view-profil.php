<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Profil</title>
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

    <div class="w-1/3 p-6 bg-white shadow-md rounded-lg mx-auto mt-24">
        <h2 class="text-2xl text-center">Profil de <?= $nom, ' ', $prenom ?></h2>
        <!-- Formulaire de modification du profil -->
        <form action="controller-profil.php" method="POST" novalidate enctype="multipart/form-data">
            <!-- Champ de saisie pour le prénom -->
            <div class="mb-4">
                <label for="user_firstname" class="block text-gray-700">Prénom :</label>
                <input id="user_firstname" type="text" name="user_firstname" class="border border-gray-300 rounded-md p-3 w-full" value="<?= isset($_POST['user_firstname']) ? htmlspecialchars($_POST['user_firstname']) : $prenom ?>">
                <span class="text-red-500">
                    <?= isset($errors['user_firstname']) ? $errors['user_firstname'] : '' ?>
                </span>
            </div>
            <!-- Champ de saisie pour le nom -->
            <div class="mb-4">
                <label for="user_lastname" class="block text-gray-700">Nom :</label>
                <input id="user_lastname" type="text" name="user_lastname" class="border border-gray-300 rounded-md p-3 w-full" value="<?= isset($_POST['user_lastname']) ? htmlspecialchars($_POST['user_lastname']) : $nom ?>">
                <span class="text-red-500">
                    <?= isset($errors['user_lastname']) ? $errors['user_lastname'] : '' ?>
                </span>
            </div>
            <!-- Champ de saisie pour l'email -->
            <div class="mb-4">
                <label for="user_email" class="block text-gray-700">Email :</label>
                <input id="user_email" type="email" name="user_email" class="border border-gray-300 rounded-md p-3 w-full" value="<?= isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : $email ?>">
                <span class="text-red-500">
                    <?= isset($errors['user_email']) ? $errors['user_email'] : '' ?>
                </span>
            </div>
            <!-- Champ de saisie pour la photo -->
            <div class="mb-4">
                <label for="user_photo" class="block text-gray-700">Photo :</label>
                <input id="user_photo" type="file" name="user_photo" class="border border-gray-300 rounded-md p-3 w-full">
                <span class="text-red-500">
                    <?= isset($errors['user_photo']) ? $errors['user_photo'] : '' ?>
                </span>
            </div>
            <!-- Champ de saisie pour la description -->
            <div class="mb-4">
                <label for="user_description" class="block text-gray-700">Description :</label>
                <textarea id="user_description" name="user_description" class="border border-gray-300 rounded-md p-3 w-full"><?= isset($_POST['user_description']) ? htmlspecialchars($_POST['user_description']) : $description ?></textarea>
                <span class="text-red-500">
                    <?= isset($errors['user_description']) ? $errors['user_description'] : '' ?>
                </span>
            </div>

            <!-- Boutons Modifier et Supprimer -->
            <div class="flex justify-center">
                <button type="submit" name="modifier" value="modifier" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded mr-4">Modifier</button>
                <button type="submit" name="delete" value="delete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-8 rounded">Supprimer</button>
            </div>
        </form>
    </div>
</body>

</html>
