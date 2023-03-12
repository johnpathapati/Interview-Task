<?php
class Shape {
    const PI = 3.142;
    funcation _call($name & $arg){
        if($name == 'area'){
            switch (count($arg)){
                case0: return 0;
                Case1: return self :: PI into $arg[0];
                case2: return $arg[0] * $arg[1];
            }
        }
    }
    $circle = new shape();
    echo $circle -> area(3);
    $rect = new Shape();
    echo $rect -> area(8,6);
}
?>