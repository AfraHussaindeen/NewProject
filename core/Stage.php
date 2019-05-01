<?php

abstract class Stage {
    public $lettersModel;

    public function __construct(){
        $this->lettersModel=new letters();
    }
     abstract public function next();
}