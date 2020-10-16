<?php
class ClasseMere
{
  protected $attributProtege;
  private $_attributPrive;
  
  public function __construct()
  {
    $this->attributProtege = 'Hello world !';
    $this->_attributPrive = 'Bonjour tout le monde !';
  }
}
?>