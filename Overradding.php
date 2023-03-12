<?php

class Base {
    function display (){
        echo " Base class function displayed";
    }
    function demo(){
        echo "Base Class funcation display";
    }
}
class Derived extends base{
    funation demo(){
        echo "Derived class function"; 
    }
}
$ob = new new Base;
$ob-> demo();
$ob -> display();
$ob2 = new Derived;
$ob2 -> demo();
$ob2 ->display();
?>