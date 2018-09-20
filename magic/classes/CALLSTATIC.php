<?php
class CALLSTATIC {
    public static function __callStatic($name,$array){
        echo "you are trying to call a function name: $name with following parameters:";
        print_r($array);

    }
}
