<?php
    $phrase="Bonjour je suis Abderrahmen. Je suis en cours d'apprendre le php.";
    $len = strlen($phrase);
    echo $phrase." contient ".$len." caractères. <br />";
    
    echo str_shuffle($phrase);

    function sayHello($name){
        echo "<p> Hi ".$name.". How are you?</p>";
    }

    sayHello("Abderrahmen");
    sayHello("Anes");

    function coneVolumeCalculator($radius,$height){
        $volume = (pow($radius,2) * pi() * $height) / 3;

        return $volume;
    }

    echo "<p>Le volume d'un cone de diamètre 20 cm et d'un hauteur de 30 cm est ".coneVolumeCalculator(10,30)." cm <sup>3</sup>.</p>";

?>