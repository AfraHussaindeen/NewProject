<?php
class DisplayNotify extends Observer{
    public $result_query;
    public function __construct($result_query){
        $this->result_query=$result_query;
        parent::__construct();
    }

    public function update(){
        $this->Model->SubmittedApplicationModel->updateNotifCount($this->result_query);
        }
    }
}

    
    
?>