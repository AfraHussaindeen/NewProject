<?php

class Training extends Model{

    public function __construct(){
        $table = 'training';
        parent::__construct($table);
    }

    public  function addNewApplication($params){
            if(self::insert($params)){
                return true;
            }else{
                return false;
            }
        
   }
}