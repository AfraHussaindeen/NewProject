<?php

class SubmittedApplication extends Model{
    public function __construct(){
        $table='training';
        parent::__construct($table);
    }
}
    interface Observer {
        /* Methods */
        abstract public void update ( SplSubject $subject )
        }
    interface observable {
        /* Methods */
        abstract public void attach ( SplObserver $observer )
        abstract public void detach ( SplObserver $observer )
        abstract public void notify ( void )
        }
    class displayTable implements Observer{
        public function update(){
            }
        }
    }
    class displayNotify implements Observer{
        public function update(){
            }
        }
    }
    