<?php

class abc{
    private $name;

    public function hello($fname){
        return $this->name = $fname;
    }

    public function __isset($property){
        return isset($this->$property);
    }


}

$obj = new abc;
$obj->hello('Ram');
echo isset($obj->name);

?>
