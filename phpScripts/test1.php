<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- On peut insérer le code php n'importe où.-->
        <title>Ceci est une page php de test <?php echo "code php.";?> </title>
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Aujourd'hui c'est le <?php echo date('d/m/y h:i:s');?> <br />
            Cette page contient <strong>uniquement</strong> du code HTML.<br />
            <strong>
                <?php 
                    echo "Ceci est érit à l'aide du php!!!"; /* code php : echo pour afficher un text */
                ?> 
            </strong>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        <p>Merci et au revoir !</p>
    </body>
</html>