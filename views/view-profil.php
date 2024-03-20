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
                <span class="text-2xl text-green-500 font-bold mr-2 font-mono">Wizpe<span class="text-blue-500">e</span></span>


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
     <!-- Rajouter un input avec le prénom -->
        <form action="controller-profil.php" method="POST" novalidate>
            <div class="mb-4">
                <label for="user_firstname" class="block text-gray-700">Prénom :</label>
                <input id="user_firstname" type="text" name="user_firstname" class="border border-gray-300 rounded-md p-3 w-full" value="<?= isset($_POST['user_firstname']) ? htmlspecialchars($_POST['user_firstname']) : $prenom ?>">
                <span class="text-red-500">
                    <?= isset($errors['user_firstname']) ? $errors['user_firstname'] : '' ?>
                </span>
            </div>
            <!-- Rajouter un input avec le nom -->
            <div class="mb-4">
                <label for="user_lastname" class="block text-gray-700">Nom :</label>
                <input id="user_lastname" type="text" name="user_lastname" class="border border-gray-300 rounded-md p-3 w-full" value="<?= isset($_POST['user_lastname']) ? htmlspecialchars($_POST['user_lastname']) : $nom ?>">
                <span class="text-red-500">
                    <?= isset($errors['user_lastname']) ? $errors['user_lastname'] : '' ?>
                </span>
            </div>
            <!-- Rajouter un input avec l'email -->
            <div class="mb-4">
                <label for="user_email" class="block text-gray-700">Email :</label>
                <input id="user_email" type="email" name="user_email" class="border border-gray-300 rounded-md p-3 w-full" value="<?= isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : $email ?>">
                <span class="text-red-500">
                    <?= isset($errors['user_email']) ? $errors['user_email'] : '' ?>
                </span>
            </div>

        
            <div class="flex justify-center">
                <button type="submit" name="modifier" value="modifier" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded">Modifier</button>
            </div>
        </form>
        <form action="controller-profil.php" method="POST" novalidate>
            <div class="flex justify-center">
                <button type="submit" name="delete" value="delete" class="bg-red-500 hover:bg-red-700 text
        
    </div>




</body>

</html>