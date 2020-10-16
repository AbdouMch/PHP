<?php
    session_start();//to start a session
?>

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
                echo "Bonjour " .  $_SESSION["genre"] . htmlspecialchars($_SESSION["prenom"])  . " " . htmlspecialchars($_SESSION["nom"]); 
                echo "<p>Votre adresse IP : " . $_SERVER["REMOTE_ADDR"] . "</p>";
            ?> 
        </p>
    </body>
</html>


