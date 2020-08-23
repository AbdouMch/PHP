<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- On peut insérer le code php n'importe où.-->
        <title><?php echo "Les structures conditionnnels";?> </title>
    </head>
    <body>
        <h2>if...elseif...else</h2>
        
        <p>
            Pour déclarer un variable en utilise $ <br />
            <?php 
                $age_visiteur = 15;
                echo "Age du visiteur est: ";
                echo  $age_visiteur;
                echo "Le visiteur possède $age_visiteur ans";
                echo "Le visiteur a ".$age_visiteur." ans";
            ?>
            <br />
            <p>
                <?php 
                    $nom_visiteur = "Mchayaa";
                    $prénom_visiteur = "Abderrahmen";
                    echo "Bonjour M.".$prénom_visiteur." ".$nom_visiteur."!";
                    $majeur = ($age_visiteur>18) ? true : false;
                    if ($majeur){
                        ?>
                        <br /> Vous pouvez accéder au site.
                <?php
                    }else{
                        echo " <br /> Contenu <strong>+18 ans</strong>. <br />";  //c'est mieux que faire      
                    }
                ?>
                
            </p>

            Cette page contient <strong>uniquement</strong> du code HTML.<br />
            <strong>
                <?php 
                    echo "Ceci est érit à l'aide du php!!!"; /* code php : echo pour afficher un text */
                ?> 
            </strong>
            Voici quelques petits tests :
        </p>
    </body>
</html>