<?php
if ((isset($_POST["password"])) and (htmlspecialchars($_POST["password"]=="kangourou")))
{
    //header("Location: http://www.example.com/another-page.php");
    header("Location: datacenter.php");
}
else
{
    echo "<p> Access denied verify your password </p>";
}
?>