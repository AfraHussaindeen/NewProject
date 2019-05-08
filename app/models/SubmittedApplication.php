<?php

class Training extends Model{

    public function __construct(){
        $table = 'training';
        parent::__construct($table);
        $this->_softDelete=true;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998

    
   public function findAllByUserId($id,$params=[]){
    $conditions=[
        "conditions"=>'id= ?',
        "bind"=>[$id]
    ];
    $conditions=array_merge($conditions,$params);
    return $this->find($conditions);
}
<<<<<<< HEAD
}
=======
}
=======
    public function updateNotifCount($result_query){
        $count = mysqli_num_rows($result_query);
        return $count;
    }
}
    
    
    
    
>>>>>>> 1296dbc26c6e5239b96d8192b722d591184c8663
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
