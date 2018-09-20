<?php
class NEHASET{
    private $array=['abc'=>'ABC variable','xyz'=>'XYZ variable'];
    public function __isset($name)
    {
        if(isset($this->array[$name])){
        //if(array_key_exists($name,$this->array)){
            return true;
        
        }else{
            return false;
        }
    }

}