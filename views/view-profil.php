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
    </div>




</body>

</html>