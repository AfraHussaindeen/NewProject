<?php

class Contacts extends Model{

    public function __construct(){
        $table = 'contacts';
        parent::__construct($table);
    }

    public  function addNewForm($params){
        self::insert($params);
    
   }
   public function findAllByUserId($params=[]){
    $conditions=[
        "conditions"=>'',
        "bind"=>[]
    ];
    $conditions=array_merge($conditions,$params);
    return $this->find($conditions);
    }
    
    public function findByIdAndUserId($id,$params=[]){
        $conditions=[
            'conditions'=> 'id =?',
            'bind'=>[$id]
        ];
        $conditions=array_merge($conditions,$params);
        return $this->findFirst($conditions);
    }
}
