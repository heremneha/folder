<?php
class NEHAUNSET{
    private $array=['abc'=>'ABC variable','xyz'=>'XYZ variable'];
    public function __unset($name){
        unset($this->array[$name]);
    }





    public function printData(){
        print_r($this->array);
    }
}