<?php

class Tests extends Model{
    public function __construct(){
        $table="tests";
        parent::__construct($table);
    }

    public function findAllByUserId($user_id,$params=[]){
        $conditions=[
            'conditions'=>'user_id = ?',
            'bind'=>[$user_id]
        ];
        $conditions = array_merge($conditions,$params);
        return $this->find();
    }

    //A function to display the first name and the last name combined together
    public function displayName(){
        return $this->fname.' ' .$this->lname;
    }
}