<?php

// IP de la camera
$ipcamera = "10.134.96.210";


// Connexion FTP
$FTP_IP = "10.134.96.205";
$FTP_Pseudo = "camera";
$FTP_MotDePasse = "camera";

// Connexion au ftp
if (($ftp = ftp_connect($FTP_IP, 21)) == false) {
    echo 'Erreur de connexion...';
}


// Connexion utilisateur
if (!ftp_login($ftp, $FTP_Pseudo, $FTP_MotDePasse)) {
    echo 'L\'identification a échoué...';
}

if (isset($_GET['suppr'])) {
    echo $_GET['suppr'];
    DeleteFile($_GET['suppr']);
    header("Location: index.php");
}

// récupère tout les fichier et les mets dans un tableau
$listes_fichiers = ftp_nlist($ftp, "."); // Le point signifie le dossier actuel
// fonction suppresion

function DeleteFile($fichierAsupprimer) {
    global $ftp;
    // Tente d'effacer le fichier $file
    if (ftp_delete($ftp, $fichierAsupprimer)) {
        echo "$fichierAsupprimer effacé avec succès\n";
    } else {
        echo "Impossible d'effacer le fichier $fichierAsupprimer\n";
    }
    return 1;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" type="image/x-icon" href="./Images/favicon.ico" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Supervision server room</title>    

        <script type="text/javascript">
            //Confirmation pour delete le bateau
            function DelComment(fichier) {
                if (confirm("Voulez vous vraiment supprimer ce fichier?")) {
<?php DeleteFile($fichier) ?>
                }
            }

        </script>


        <style>   
            body {
                background-color: white;
            }

            canvas{
                border:black solid 1px;
            }
        </style>
    </head>
    <body>

    <center>
        <h1><div class="label label-info">Supervision server room</div></h1>         
        <!-- Add video -->
        <iframe class="embed-responsive-item" src=<?php echo "http://admin:Super2008@$ipcamera:80/video/mjpg.cgi" ?> width="661" height="484" onscroll="no"></iframe>
        <div class="jumbotron col-sm-4 col-sm-offset-4" >

            <form class="form-horizontal" method="post" action="#">
                <?php
                foreach ($listes_fichiers as $fichier) {
                    $buff = ftp_mdtm($ftp, $fichier);
                    if ($buff != -1) {
                        echo "<br/>";
                        echo "$fichier  : " . date("F d Y H:i:s.", $buff);
                        ?>
                        <a type="submit" class="btn btn-primary btn-xs"  href="ouvrir.php?open=<?php echo $fichier; ?>" name="BoutonOuvrir" >Ouvrir</a>
                        <a type="submit" class="btn btn-danger btn-xs"  href="index.php?suppr=<?php echo $fichier; ?>" name="boutonsupprimer" >Supprimer</a><br/>
                        <?php
                    } else {
                        echo "Impossible de récupérer mdtime";
                    }
                }
                ?>
            </form>


            <h2><div class="label label-info ">Temperature</div></h2>
            <?php
            $temperature = 20;
            $labelclass = '';
            if ($temperature <= 20) {
                $labelclass = "success";
            } else if (($temperature > 20) && ($temperature < 50)) {
                $labelclass = "warning";
            } else if ($temperature >= 50) {
                $labelclass = "danger";
            }
            echo '<h3><span class="label label-' . $labelclass . '">' . $temperature . '°C</span></h3>';
            ?>
        </div>
    </center>

    <?php
    ftp_close($ftp); // ferme connexion
    ?> 
</body>
</html>