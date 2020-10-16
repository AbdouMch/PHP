<?php
    //include the class that will be use. This is usefull for one class
    //require "Personage.php"; 

    //If we may have multiple classes. It is recommanded to use the auto charging option 
    //by using  the spl_autoload_register("name_of_the_including_function") function

    function autoChargeClasses($className){
        require $className.".php";
    }
    spl_autoload_register("autoChargeClasses");

    $perso1 = new Personage(20,50);
    $perso2 = new Personage(25,60);
    $perso3 = new Personage(Personage::FORCE_MOYENNE, 60);

    $perso1->hit($perso2);
    echo "<br /> Person 2 damage after hit is " . $perso2->damage() . "<br />";

    $perso1->gainExperience(5);

    Personage::speak();
    echo "Number of created personage is " . Personage::counter() . "<br />";

    $magician1 = new Magician(40);

    echo "Number of created personage is " . Personage::counter() . "<br />";

    echo "The damage of person 1 is " . $perso1->damage() . "<br />";
    $magician1->castASpell($perso1);
    echo "The damage of person 1 is " . $perso1->damage() . "<br />";

    $magician1->setSpeed(30);

    echo "The speed of magicien 1 is " . $magician1->speed() . "<br />";

    $magician1->turboSpeed(50);
    
    echo "The speed of magicien 1 is " . $magician1->speed() . "<br />";

?>