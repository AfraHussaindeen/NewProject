<?php

class Letters extends Model{
    public function __construct(){
        $table="letters";
        parent::__construct($table);
    }

    public function getAllSubmissions(){
        return $this->find();
    }

    public  function addNewSubmission($params){
        if(self::insert($params)){
            return true;
        }else{
            return false;
        }
    
}

   
}