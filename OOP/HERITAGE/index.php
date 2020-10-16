<?php

    function autoChargeClasses($className){
        require $className.".php";
    }
    spl_autoload_register("autoChargeClasses");

    $perso1 = new Magician(20,50);
    $magician1 = new Magician(Personage::FORCE_GRANDE,50);


    $magician1->castASpell($perso1);
    echo "The damage of person 1 is " . $perso1->damage() . "<br />";

    $magician1->setSpeed(30);

    echo "The speed of magicien 1 is " . $magician1->speed() . "<br />";

    $magician1->turboSpeed(50);
    
    echo "The speed of magicien 1 is " . $magician1->speed() . "<br />";


    WhiteMagician::giveId();

    echo "The damage of person 1 is " . $perso1->damage() . "<br />";

    $magician1->hit($perso1);

    echo "The magic of magician 1 is " . $magician1->magic() . "<br />";

    //$magician1->setForce(50);

    echo "The force of magicien 1 is " . $magician1->force() . "<br />";

    echo "The damage of person 1 is " . $perso1->damage() . "<br />";

    //$lMagician = new LittleWhiteMagician(20,20);//return an error becaus WhiteMagician is final

?>