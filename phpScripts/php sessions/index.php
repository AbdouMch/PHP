<?php
    session_start();//to start a session
    if (!(isset($_POST["nom"])))
    {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Contact</title>
    </head>
    
    <body>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <p>Photo de profile :<br />
                <input type="file" name="monimage"/>
            </p>
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

<?php
    }
    else
    {
        if(isset($_POST["nom"]))
        {
            $_SESSION["nom"] = $_POST["nom"];
        }

        if(isset($_POST["prenom"]))
        {
            $_SESSION["prenom"] = $_POST["prenom"];
        }

        if(isset($_POST["newslettre"]))
        {
            $_SESSION["newslettre"] = $_POST["newslettre"];
        }
        if(isset($_POST["genre"]))
        {
            $_SESSION["genre"] = $_POST["genre"];
        }

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
        header("Location: welcome.php");
    }

?>