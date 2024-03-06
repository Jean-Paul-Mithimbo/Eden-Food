 <?php
session_start();
include("../bdd/connexion.php");
try {
    if (isset($_POST['btn_login'])) {
        $EmailClient = $_POST['EmailClient'];
        $PasswordClient = $_POST['PasswordClient'];
        echo $EmailClient . "" . $PasswordClient;
        if (!empty($EmailClient) and !empty($PasswordClient)) {
            //verifion s'il s'agit de l'admin
            if ($EmailClient == 'admin@gmail.com' and $PasswordClient =='1234') {
                $_SESSION['idAdmin'] = 01;
                $_SESSION['NomAdmin'] = 'Admin';
                $_SESSION['EmailAdmin'] = 'admin@gmail.com';
                $_SESSION['PasswordAdmin'] = '1234';
                // echo$_SESSION['idAdmin'];
                echo "<script>window.location.replace('../index.php');</script>";

            } else {
                // client
                $req_user = $base->prepare("SELECT * FROM client  WHERE EmailClient=? AND PasswordClient=?");
                $req_user->execute(array($EmailClient, $PasswordClient));
                $user_exist = $req_user->rowCount();
                echo $user_exist;

                if ($user_exist == 1) {
                    $user_info = $req_user->fetch();
                    $_SESSION['idClient'] = $user_info['idClient'];
                    $_SESSION['NomClient'] = $user_info['NomClient'];
                    $_SESSION['PostNomClient'] = $user_info['PostNomClient'];
                    $_SESSION['AdresseClient'] = $user_info['AdresseClient'];
                    $_SESSION['EmailClient'] = $user_info['EmailClient'];
                    $_SESSION['PasswordClient'] = $user_info['EmailClient'];
                    $_SESSION['PhotoClient'] = $user_info['PhotoClient'];
                    // echo$_SESSION['PasswordStation'];
                    echo "<script>window.location.replace('../index.php');</script>";
                    exit();

                 
                }
                elseif ($user_exist == 0) {
                    echo "<script>
                            alert('Aucun compte trouvé');
                           
                          window.location.replace('../index.php');
                        </script>";
                }
                    

            }

        } else {
            $afficher = "Remplisser tout les champs svp!!";
        }


    }
} catch (Exception $exept) {
    die("Erreur: " . $exept->getMessage());
}
ob_end_flush(); ?>