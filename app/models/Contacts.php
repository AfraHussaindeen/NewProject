<?php

class Contacts extends Model{

    public function __construct(){
        $table = 'contacts';
        parent::__construct($table);
    }

    public  function addNewForm($params){
        self::insert($params);
    
   }
}