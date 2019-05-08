<?php
abstract class Observer {
    /* Methods */
    public $SubmittedApplicationModel;

    public function __construct(){
        $this->SubmittedApplicationModel=new SubmittedApplication();
    }
    abstract public void update ( SplSubject $subject )
    }
    
    
?>