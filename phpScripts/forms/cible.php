<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Contact</title>
    </head>
    
    <body>
        <p> 
            <?php
                 echo "Bonjour " .  $_POST["genre"] . htmlspecialchars($_POST["prenom"])  . " " . htmlspecialchars($_POST["nom"]); 
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
        <p> Les données envoyées par le formulaire sont : <br />
        <?php
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
        ?>
        </p>

    </body>
</html>