<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Contact</title>
    </head>
    
    <body>
        <form action="cible.php" method="POST">
            <p>Genre: <br/>
				<input type="radio" name="genre" value="M. " id="monsieur" /> <label>Monsieur</label> <br/>
				<input type="radio" name="genre" value="Mme. " id="madame" /> <label>Madame</label><br/>
			</p>
            <p> <label> Prénom : <input name="prenom" type="text" /></label></p>
            <p> <label> Nom : <input name="nom" type="text" /></label></p>
            <p> <label> Adresse mail : <input name="email" type="email" /></label></p>
            <p><input type="checkbox" name="newslettre" /> <label>Voulez-vous s'inscrir à notre newslettre <br/></label></p>
            <p> <input type="submit" /></p>
        </form>
    </body>
</html>