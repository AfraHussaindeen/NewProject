<?php

class Training extends Model{

    public function __construct(){
        $table = 'training';
        parent::__construct($table);
        $this->_softDelete=true;
    }
   public function findAllByUserId($id,$params=[]){
    $conditions=[
        "conditions"=>'id= ?',
        "bind"=>[$id]
    ];
    $conditions=array_merge($conditions,$params);
    return $this->find($conditions);
    }
}
    
   
