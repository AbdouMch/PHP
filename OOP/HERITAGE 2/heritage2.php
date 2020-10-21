<?php
    class Mother{

        public static function startTest(){
          self::whoAreYou();
        }

        public static function startTestWithStatic(){
            static::whoAreYou();
          }

        public static function whoAreYou(){
          echo "I am the Mother class <br />";
        }
    }

    class Child extends Mother{

        public static function whoAreYou(){
          echo "I am the Child class <br />";
        }
    }

    Child::startTest();

    echo "call from child with static:: in parent <br />";
    
    Child::startTestWithStatic();
?>