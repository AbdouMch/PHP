<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- On peut insérer le code php n'importe où.-->
        <title><?php echo "Les structures conditionnnels";?> </title>
    </head>
    <body>
        <h2>Build your aown pyramid!</h2>

        <p>
            Your pyramid is : <br />
            <?php
                $pyramidHeight=4;
                for ($i=1;$i<=$pyramidHeight;$i++){
                    echo "############### <br />";
                }
            ?>
        </p>
    </body>
</html>