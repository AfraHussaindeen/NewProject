<?php

class SubmittedApplication extends Model{
    public function __construct(){
        $table='training';
        parent::__construct($table);
    }
    public function updateNotifCount($result_query){
        $count = mysqli_num_rows($result_query);
        return $count;
    }
}
    
    
    
    