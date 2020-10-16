<?php
    session_start();//to start a session
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Welcome</title>
    </head>
    
    <body>
        <a href="contact.php">Contact</a>
        <a href="blog.php">BLOG</a>
        <p> 
            <?php
                echo "Bonjour " .  $_SESSION["genre"] . htmlspecialchars($_SESSION["prenom"])  . " " . htmlspecialchars($_SESSION["nom"]); 
                echo "<p>Votre adresse IP : " . $_SERVER["REMOTE_ADDR"] . "</p>";
            ?> 
        </p>
        <p> 
            <?php
                if (isset($_SESSION["newslettre"]))
                {
                    echo "Vous êtes maintenant abonné à notre newslettre.<br /> Merci pour votre confiance!";
                }
                else
                {
                    echo "Si vous voulez s'inscrir ultérieurement vous êtes le bienvenu.";
                }
            ?>
        </p>
    </body>
</html>


