<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Contact</title>
    </head>
    
    <body>
        <?php 
            /*file procedure*/ 
            if((isset($_FILES["monimage"])) and !($_FILES["monimage"]["error"]))
            {   $imgTypes = array("png","jpeg","bmp","jpg");
                //if (in_array($_FILES["monimage"]["type"],$imgTypes))
                //on peut utiliser la fonction pathinfo($_FILES["monimage"]["name])
                $fileDetails  = pathinfo($_FILES["monimage"]["name"]);
                if(in_array($fileDetails["extension"],$imgTypes))
                {
                    $tempDir = $_FILES["monimage"]["tmp_name"];
                    // echo "<p>file temp dir: " . $tempDir. "</p>"; 
                    //$savingDir = 'uploads/' . basename($_FILES['monimage']['name']);
                    //trying to change the file name
                    $savingDir = 'uploads/' . htmlspecialchars($_POST["prenom"]) . htmlspecialchars($_POST["nom"]) . "." . $fileDetails["extension"];
                    // echo "<p>file destination : " . $savingDir . "</p>";
                    move_uploaded_file($tempDir, $savingDir);
                }
            }
            // echo "<p> le tab FILE contient </p>";
            // echo "<pre>";
            // print_r($_FILES);
            // echo "</pre>";

            // echo "<p> le 'name' elem dans FILE contient </p>";
            // $name = pathinfo($_FILES["monimage"]["name"]);
            // echo "<pre>";
            // print_r($name);
            // echo "</pre>";

        ?>
        <p> 
            <?php
                echo '<p><img src="'. $savingDir . '" alt="userPhoto" height="200"></p>';
                echo "Bonjour " .  $_POST["genre"] . htmlspecialchars($_POST["prenom"])  . " " . htmlspecialchars($_POST["nom"]); 
                echo "<p>Votre adresse IP : " . $_SERVER["REMOTE_ADDR"] . "</p>";
            ?> 
        </p>
        <p> 
            <?php
                if (isset($_POST["newslettre"]))
                {
                    echo "Vous êtes maintenant abonné à notre newslettre.<br /> Merci pour votre confiance!";
                }
                else
                {
                    echo "Si vous voulez s'inscrir ultérieurement vous êtes le bienvenu.";
                }
            ?>
        </p>
        <!-- <p> Les données envoyées par le formulaire sont : <br />
        <?php
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
        ?> -->
        </p>

    </body>
</html>


