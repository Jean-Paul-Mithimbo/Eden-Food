<?php
include("entete.php");
?>

<body>
    <!-- page -->
    <main class="min-h-screen w-full text-gray-700" x-data="layout">
        <!-- header page -->
        <?php
        include("header.php");
        ?>
        <div class="flex">
            <!-- aside -->
            <?php
            include("aside.php");
            ?>

            <div class="container grid md:grid-cols-3 mx-auto">
                <div class="bg-white p-8 rounded shadow-md max-w-md w-full mx-auto">
                    <h2 class="text-2xl font-semibold mb-4">Inscription</h2>

                    <form action="#" method="POST">
                        <!-- Nom et Prénom -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700">Prénom</label>
                                <input type="text" id="firstName" name="firstName"
                                    class="mt-1 p-2 w-full border rounded-md">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700">Nom</label>
                                <input type="text" id="lastName" name="lastName"
                                    class="mt-1 p-2 w-full border rounded-md">
                            </div>
                        </div>

                        <!-- Adresse email -->
                        <div class="mt-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
                            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Mot de passe -->
                        <div class="mt-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                            <input type="password" id="password" name="password"
                                class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Bouton d'inscription -->
                        <div class="mt-6">
                            <button type="submit"
                                class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">S'inscrire</button>
                        </div>
                    </form>
                </div>


            </div>

    </main>
    <?php
    include("footer.php");
    ?>

    <script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("layout", () => ({
            profileOpen: false,
            asideOpen: true,
        }));
    });
    </script>


</body>

</html>