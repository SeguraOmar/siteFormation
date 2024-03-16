<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Accueil</title>
</head>

<body class="bg-gray-300">
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


    <section class="bg-cover bg-center h-80 w-10/12 mx-auto flex justify-start items-center" style="background-image: url('../assets/image/IA.jpg');">
        <div class="h-2/3 w-4/12 bg-white flex flex-col justify-start ml-20">
            <h1 class="text-4xl text-black font-bold m-5 font-mono">Un apprentissage fait pour vous !</h1>
            <p class="ml-5 text-2xl font-mono">Un accompagnement quotidien pour développer vos compétences</p>
        </div>
    </section>

    <section class="py-24">
        <div class="container mx-auto">
            <div class="flex justify-around">
                <div class="w-1/3 p-8 bg-white shadow-lg rounded-md mr-4">
                    <h2 class="text-3xl font-bold mb-4 font-mono">Qu'est-ce que l'IA ?</h2>
                    <p class="text-lg font-mono">L'intelligence artificielle (IA) est une discipline de l'informatique qui vise à créer des machines capables d'imiter certaines capacités intellectuelles humaines.</p>
                    <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold rounded mt-4 p-2 font-mono">Je me forme</button>
                </div>
                <div class="w-1/3 p-8 bg-white shadow-lg rounded-md ml-4">
                    <h2 class="text-3xl font-bold mb-4 font-mono">Qu'est-ce que le Cloud ?</h2>
                    <p class="text-lg font-mono">Le Cloud, ou "informatique en nuage", désigne l'utilisation de serveurs distants pour stocker, gérer et traiter des données sur Internet, plutôt que sur un ordinateur local ou un serveur physique.</p>
                </div>
            </div>
        </div>
    </section>



</body>

</html>