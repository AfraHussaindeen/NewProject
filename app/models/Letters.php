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

    public function checkSubmission($nicNumber){
        $check= $this->find(['conditions'=>"nicNumber = ?" , 'bind' =>[$nicNumber]]);
        if(count($check)==1){
            return $check;
        }else{
            return false;
        }
    }

    
    public function insertDate($stage,$date,$id){
        $this->update($id , [$stage => $date]);
    }
   
    public function updateStage($id,$stage){
        $stage='"'.$stage.'"';
        $this->update($id,['stage'=> $stage]);
    }

    public function getStage($id){
        return str_replace('"','',$this->findById($id)->stage);
    }
}