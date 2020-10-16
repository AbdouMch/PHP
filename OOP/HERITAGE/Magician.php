<?php

class Magician extends Personage{

  private $_magic;

  //contruc
  public function __construct($magic){
      $this->setMagic($magic);
  }

  //getters
  public function magic(){
      return $this->_magic;
  }

  //setters
  public function setMagic($magic){
      if(!is_int($magic)){
          trigger_error("the magic value should be an integer", E_USER_WARNING);
          return;
      }
      $this->_magic = $magic;
  }

  //public functions
  public function castASpell(Personage $perso){
    $perso->changeDamage($this->_magic);
  }

  public function gainExperience($experienceNumber){

    parent::gainExperience($experienceNumber);//Use the Personage (wich is the parent of the class ) function

    if (is_int($experienceNumber)) {
      $this->_magic +=$experienceNumber;
    }
    if ($this->_magic > 100) {
      $this->_magic = 100;
    }
  }

  public function getExperienc(){

    return parent::experience();
  }

  public function turboSpeed($gainSpeed){
    if (is_int($gainSpeed)) {
      $this->speed +=$gainSpeed;
    }
  }

  public function hit(Personage $persoToHit){

    //$damage = $persoToHit->damage()+$this->_magic;
    $damage = $persoToHit->damage()+$this->_magic;
    $persoToHit->setDamage($damage);

  }

  //static functions
  public static function giveId(){
    self::callWhoRYou();
  }

  public function whoRYou(){
    echo "I am a <strong> Magician </strong>";
  }
}
?>