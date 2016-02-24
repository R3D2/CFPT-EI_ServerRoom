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
        <?php
        include ('test.php');
        $filename = "./1.png";
        $filename2 = "./2.png";
        mime_content_type($filename);
        mime_content_type($filename2);
        ?>
    <center>
        <h1><span class="label label-info">Supervision server room</span></h1>         
        <!-- Add video -->
        <iframe class="embed-responsive-item" src="http://admin:Super2008@10.134.98.92:80/video/mjpg.cgi" width="661" height="484" onscroll="no"></iframe>

        <h1><span class="label label-info">Temperature</span></h1>
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
    </center>
</body>
</html>