<?php
session_start();
include("entete.php");
include("bdd/connexion.php");
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
            <?php
            try {
                // $afficher = "";
                if (isset($_POST['btn_inscri'])) {
                    $NomClient = $_POST['NomClient'];
                    $PostNomClient = $_POST['PostNomClient'];
                    $AdresseClient = $_POST['AdresseClient'];
                    $EmailClient = $_POST['EmailClient'];
                    $PasswordClient = ($_POST['PasswordClient']);
                    $PasswordConfirm = ($_POST['PasswordConfirm']);
                    // echo$PasswordClient;
            
                    //verifion la validite du mail
            
                    if (filter_var($EmailClient, FILTER_VALIDATE_EMAIL)) {
                        //verifions si le mail existe deja
                        $reqmail = $base->prepare("SELECT * FROM client WHERE EmailClient=?");
                        $reqmail->execute(array($EmailClient));
                        $mailexist = $reqmail->rowCount();
                        if ($mailexist == 0) {

                            //voir si le 2 password sont les même
                            if ($PasswordClient == $PasswordConfirm) {

                                // verifions que le fichier a été transmis sans erreurs
                                if (isset($_FILES['PhotoClient']) and $_FILES['PhotoClient']['error'] == 0) {

                                    // verifions la taille du fichier
                                    if ($_FILES['PhotoClient']['size'] < 50000000) {

                                        // stockons le nom du fichier dans une variable
                                        $nom_fichier = pathinfo($_FILES['PhotoClient']['name']);

                                        // récuperons l'extension du fichier
                                        $recup_extension = $nom_fichier['extension'];
                                        // définissons les extensions autorisées
                                        $extensions = array('png', 'PNG', 'jpg', 'JPG', 'jpeg', 'JPEG');
                                        // verifions si l'extension du fichier uploader est autorisé
                                        if (in_array($recup_extension, $extensions)) {
                                            // deplaçons le fichier vers notre serveur
                                            if (move_uploaded_file($_FILES['PhotoClient']['tmp_name'], 'assets/img_client/' . basename($_FILES['PhotoClient']['name']))) {

                                                $req = $base->prepare('INSERT INTO client(NomClient, PostNomClient, AdresseClient, EmailClient,PasswordClient,PhotoClient) 
                                                 VALUES(:NomClient, :PostNomClient, :AdresseClient, :EmailClient,:PasswordClient,:PhotoClient)');
                                                $req->execute(
                                                    array(
                                                        'NomClient' => $NomClient,
                                                        'PostNomClient' => $PostNomClient,
                                                        'AdresseClient' => $AdresseClient,
                                                        'EmailClient' => $EmailClient,
                                                        'PasswordClient' => $PasswordClient,
                                                        'PhotoClient' => $_FILES['PhotoClient']['name']
                                                    )
                                                );

                                                echo "
                                            <script>
                                                alert('Enregistrer avec succes !!');
                                            </script>
                                            ";



                                            }
                                        } else {
                                            $afficher = "extension non autoriser";

                                        }
                                    } else {
                                       
                                        $afficher = "fichier très volumineux";


                                    }
                                }


                            } else {
                                $afficher = "veuillez saisir le même mot de passe dans les deux champs";
                            }


                        } else {
                            $afficher = "Mail déja utilisé!!";
                        }
                    } else {
                        $afficher = "Adresse Mail non valide";
                    }







                }
            } catch (Exception $exept) {
                die("Erreur: " . $exept->getMessage());
            }
            ?>

            <div class="container mx-auto flex justify-center py-5 mt-20">
                <div class="grid md:grid-cols-2 items-center p-5 rounded-2xl flex justify-center shadow">
                    <div class="md:col-span-2  p-5">
                        <h1 class="text-2xl font-bold text-gray-950 text-center">Inscription</h1><br>
                        <p class=" text-yellow-600 text-center">
                            <?php
                            if(isset($afficher)){
                                echo $afficher;
                            }
                            
                            ?>
                        </p>
                        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6 text-gray-600">
                            <div></div>
                            <div></div>

                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 0 0-12 0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4" />
                                    </svg>
                                </div>
                                <input type="text" name="NomClient" placeholder="Votre nom" required
                                    class=" py-2 px-12 rounded-full  focus:outline-none w-80 focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 0 0-12 0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4" />
                                    </svg>
                                </div>
                                <input type="text" name="PostNomClient" placeholder="Votre pseudo" required
                                    class="bg-white-light py-2 px-12 rounded-full w-80 focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5M12 2a7 7 0 0 1 7 7c0 5.25-7 13-7 13S5 14.25 5 9a7 7 0 0 1 7-7m0 2a5 5 0 0 0-5 5c0 1 0 3 5 9.71C17 12 17 10 17 9a5 5 0 0 0-5-5" />
                                    </svg>
                                </div>
                                <input type="text" name="AdresseClient" placeholder="adresse" required
                                    class="bg-white-light py-2 px-12 rounded-full w-80 focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M416 64H96a64.07 64.07 0 0 0-64 64v256a64.07 64.07 0 0 0 64 64h320a64.07 64.07 0 0 0 64-64V128a64.07 64.07 0 0 0-64-64m-80 64a48 48 0 1 1-48 48a48.05 48.05 0 0 1 48-48M96 416a32 32 0 0 1-32-32v-67.63l94.84-84.3a48.06 48.06 0 0 1 65.8 1.9l64.95 64.81L172.37 416Zm352-32a32 32 0 0 1-32 32H217.63l121.42-121.42a47.72 47.72 0 0 1 61.64-.16L448 333.84Z" />
                                    </svg>

                                </div>
                                <input type="file" name="PhotoClient" placeholder="votre photo" required
                                    class="bg-white-light py-2 px-12 rounded-full w-80 focus:bg-black-dark focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                                    <i class="fa-solid fa-envelope-open"></i>
                                </div>
                                <input type="email" name="EmailClient" placeholder="Email Address"
                                    class="bg-white-light py-2 px-12 rounded-full focus:bg-black-dark w-80 focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 17a2 2 0 0 1-2-2c0-1.11.89-2 2-2a2 2 0 0 1 2 2a2 2 0 0 1-2 2m6 3V10H6v10zm0-12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10c0-1.11.89-2 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3" />
                                    </svg>
                                </div>
                                <input type="text" name="PasswordClient" placeholder="Password"
                                    class=" bg-white-light py-2 px-12 rounded-full focus:bg-black-dark w-80 focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute top-1 left-1 bg-white-medium rounded-full p-2 flex items-center justify-center text-yellow-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 17a2 2 0 0 1-2-2c0-1.11.89-2 2-2a2 2 0 0 1 2 2a2 2 0 0 1-2 2m6 3V10H6v10zm0-12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10c0-1.11.89-2 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3" />
                                    </svg>
                                </div>
                                <input type="text" name="PasswordConfirm" placeholder="Password"
                                    class=" bg-white-light py-2 px-12 rounded-full focus:bg-black-dark w-80 focus:outline-none focus:ring-1 focus:ring-neon-blue focus:drop-shadow-lg border border-gray-300" />
                            </div>
                            <input type="submit" name="btn_inscri" value="Inscription" class="bg-gradient-to-r from-gray-900
                            to-yellow-400 text-white w-80 font-semibold rounded-full py-2 cursor-pointer">

                        </form>
                        <div class="text-dull-white  pt-4 space-y-4 text-sm">
                            <p>Don't have an account? <a class="text-neon-blue font-semibold cursor-pointer">Sign
                                    up</a>
                            </p>

                        </div>
                    </div>
                    <!-- <div>

                    </div> -->
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

    <script src="js/app.js" type="text/javascript"></script>
</body>

</html>