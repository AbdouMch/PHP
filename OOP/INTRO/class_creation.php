
<?php 
    // class creation
    class Personage{

        // class attributes with private visibility and initialisation if needed (encapsulation OOP principle)

        private $_force; 
        private $_localisation;
        private $_experience;
        private $_damage=0;


        //class constractor. Used to initiate attribute value in the creation of the object

        public function __construct($force, $experience){
            $this->setForce($force);
            $this->setExperience($experience);
            $this->damage=0;
        }

        // class  methodes in general with public visibility

        public function hit(Personage $persoToHit){
            //$persoToHit->changeDamage($this->_force);
            $persoToHit->_damage += $this->_force; // best way

            /* $this : the object that call the current method so we use the attribute of the object
            that calls the method
            For this $persoToHit->_damage is the attribute of object passed on argument
            */
        }

        public function gainExperience($experienceNumber){
            $this->_experience += $experienceNumber;
        }

        public function changeDamage($damageNumber){
            $this->_damage += $damageNumber;
        }

        public function showExperience(){
            echo "<br />The character experience is : " . $this->_experience;
        }

        public function speak(){
            echo "Hello world! I'm a character.";
        }

        //getters of the class (encapsulation OOP principle)

        public function force(){
            return $this->_force;
        }
        
        public function damage(){
            return $this->_damage;
        }

        public function localisation(){
            return $this->_localisation;
        }
        
        public function experience(){
            return $this->_experience;
        }

        //setters to change the value of the class's attributes with constraints (encapsulation OOP principle)

        public function setForce($force){

            // create the constraints to the value

            if(!is_int($force)){
                trigger_error("The force should be an integer", E_USER_WARNING);
                return;
            }

            if($force>100){
                trigger_error("The force should be less than 100", E_USER_WARNING);
                return;
            }
            
            // if everething is OK than change the value of the attribute

            $this->_force = $force;
        }

        public function setExperience($experience){

            // create the constraints to the value

            if(!is_int($experience)){
                trigger_error("The experience should be an integer", E_USER_WARNING);
                return;
            }

            if($experience>100){
                trigger_error("The experience should be less than 100", E_USER_WARNING);
                return;
            }
            
            // if everething is OK than change the value of the attribute

            $this->_experience = $experience;
        }

        


    }

    // main program

/* 
    // creating a new object
    $perso1 = new Personage();
    $perso1->setExperience(50);
    $perso1->setForce(20); */
    $perso1 = new Personage(20,50);

/*     $perso2 = new Personage;
    $perso2->setExperience(60);
    $perso2->setForce(25); */
    // Using class constructor instead
    $perso2 = new Personage(25,60);

    // using the object's method
    $perso1->speak();

    // $perso1->$_experience = $_experience + 1; // display a fatal error because the attribute is private
    
    //for that we should create a method that does the action with a specific constraint
    echo "<br /> Before gaining experience : " . $perso1->experience();
    
    $perso1->gainExperience(5);
    echo "<br /> After gaining " . 5 . " experience : " . $perso1->experience();
    

    echo "<br /> Person 2 damage is " . $perso2->damage();
    echo "<br /> Person 1 force is " . $perso1->force();

    $perso1->hit($perso2);

    echo "<br /> Person 2 damage after hit is " . $perso2->damage();

    $perso1->hit($perso2);

    echo "<br /> Person 2 damage after hit is " . $perso2->damage();
    $perso1->hit($perso2);

    echo "<br /> Person 2 damage after hit is " . $perso2->damage();

?>

<?php 
?>