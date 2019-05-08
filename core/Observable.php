<?php
abstract class Observable {
    /* Methods */
    public $SubmittedApplicationModel;

    public function __construct(){
        $this->SubmittedApplicationModel=new SubmittedApplication();
    }
    abstract public void attach ( SplObserver $observer )
    abstract public void detach ( SplObserver $observer )
    abstract public void notify ( void )
    }
    
    
?>