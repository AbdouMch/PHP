<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Bonjour</title>
    </head>
    
    <body>
        <p>
            <?php
                if ((isset($_GET["nom"])) and (isset($_GET["prenom"])) and (isset($_GET["repeter"])))
                {
                    $nrepeter=(int)$_GET["repeter"];
                    if(($nrepeter>0) and ($nrepeter<100))
                    {
                        for($i=1;$i<=$nrepeter;$i++)
                        {
                            echo "<p>Bonjour" . $_GET["prenom"] . " " . $_GET["nom"]."</p>";
                        }
                    }                    
                }
                else{
                    echo "404 not found";
                }
            ?>
        </p>
    </body>
</html>