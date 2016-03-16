<?php

// Connexion FTP
$FTP_IP = "10.134.96.205";
$FTP_Pseudo = "camera";
$FTP_MotDePasse = "camera";

// Connexion au ftp
if (($ftp = ftp_connect($FTP_IP, 21)) == false) {
    echo 'Erreur de connexion...';
}

// Ne pas afficher les erreurs au visiteurs
ini_set("display_errors",0);error_reporting(0);

// Connexion utilisateur
if (!ftp_login($ftp, $FTP_Pseudo, $FTP_MotDePasse)) {
    echo 'L\'identification a échoué...';
}


// récupère tout les fichier et les mets dans un tableau
$listes_fichiers = ftp_nlist($ftp, "."); // Le point signifie le dossier actuel
$NomFichier = $_GET['open'];
$regexExtensionFichier= '^.*\.(jpg|jpeg|png|gif)$';
$titre = eregi($regexExtensionFichier,$NomFichier,$regs);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" type="image/x-icon" href="./Images/favicon.ico" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Supervision server room</title>    
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
        <h1><div class="label label-info">Supervision server room</div></h1><br/><br/>    
        <h3><div class="label label-success">Fichier ouvert <?php echo $_GET['open'];?></div></h3>    
        <?php if($regs[1]=="jpg"){ ?>
        <a><img src= "ftp://camera:camera@10.134.96.205/<?php echo $_GET['open']; ?>" border="0" height="300" width="225"></a> </br></br>
        <?php } else { ?>
        <a><video controls src="ftp://camera:camera@10.134.96.205/<?php echo $_GET['open'];?>"  >Vidéo non supporté</video></a> </br></br>
        <?php } ?>
        <a type="submit" class="btn btn-danger btn-link"  href="index.php" name="BoutonRetour" ><- Retour à l'index</a><br/>
    </center>
      
    <?php
    ftp_close($ftp); // ferme connexion
    ?> 
</body>
</html>