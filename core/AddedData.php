<?php
class AddedData extends Observable
{
 
    
    protected $observers = [];
    public $result_query;
    public function __construct($result_query){
        $this->result_query=$result_query;
        parent::__construct();
    }
    public function attach(Observer $observer)
    {
        $key = spl_object_hash($observer);
        $this->observers[$key] = $observer;
 
        return $this;
    }
 
    public function detach(Observer $observer)
    {
        $key = spl_object_hash($observer);
        unset($this->observers[$key]);
    }
 
    
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}