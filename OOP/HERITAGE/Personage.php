<?php 
    // abstract class. It acannot be intanciated but should be herited. It is used to give common
    // functionalities across all herited classes

    abstract class Personage{

        private $_force; 
        private $_localisation;
        private $_experience;
        private $_damage;

        // contatnt variables

        const FORCE_PETITE = 20;
        const FORCE_MOYENNE = 50;
        const FORCE_GRANDE = 80; 

        // static variables
        private static $_text2Speak = "I will kill you all";
        private static $_counter = 0;

        //protected variables. 
        protected $speed;

        //contruc
        public function __construct($force, $experience){
            $this->setForce($force);
            $this->setExperience($experience);
            $this->_damage=0;
            self::$_counter++;
        }

        //getters
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

        function speed(){
          return $this->speed;
        }

        //setters
        public function setForce($force){


            if(!is_int($force)){
                trigger_error("The force should be an integer", E_USER_WARNING);
                return;
            }

            if (in_array($force,[self::FORCE_PETITE,self::FORCE_MOYENNE,self::FORCE_GRANDE])){
                $this->_force = $force;
            }
        }

        public function setExperience($experience){


            if(!is_int($experience)){
                trigger_error("The experience should be an integer", E_USER_WARNING);
                return;
            }

            if($experience>100){
                trigger_error("The experience should be less than 100", E_USER_WARNING);
                return;
            }
            
            $this->_experience = $experience;
        }

        public function setSpeed($speed){
            if(!is_int($speed)){
                trigger_error("the speed value should be an integer", E_USER_WARNING);
                return;
            }
            $this->speed = $speed;
        }

        public function setDamage($damage){
        
            if (is_int($damage)) {
              $this->_damage = $damage;
            }
            if ($this->_damage > 100) {
              $this->_damage = 100;
            }
        }


        //functions
        public abstract function hit(Personage $persoToHit);

        public function gainExperience($experienceNumber){
            if(is_int($experienceNumber)){
                $this->_experience += $experienceNumber;
            }
            if ($this->_experience > 100){
                $this->_experience = 100;
            }
        }

        public function changeDamage($damageNumber){
            $this->_damage += $damageNumber;
        }

        public function showExperience(){
            echo "<br />The character experience is : " . $this->_experience;
        }

        //static functions
        public static function speak(){
            echo self::$_text2Speak;
        }

        public static function counter(){
            return self::$_counter;
        }

        public static function callWhoRYou(){
            self::whoRYou();
        }
        
        public function whoRYou(){
          echo "I am a <strong> Personage </strong>";
        }
    }
?>