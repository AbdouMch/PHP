<?php
    class ClasseFille extends ClasseMere
    {
    public function afficherAttributs()
    {
        echo $this->attributProtege; // L'attribut est protégé, on a donc accès à celui-ci.
        echo $this->_attributPrive; // L'attribut est privé, on n'a pas accès celui-ci, donc rien ne s'affichera (mis à part une notice si vous les avez activées).
    }
    }
?>