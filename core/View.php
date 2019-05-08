<?php

 class View{
   protected $_head , $_body ,$_siteTitle=SITE_TITLE , $_outputBuffer ,$_layout = DEFAULT_LAYOUT;

   public function __construct (){

   }

   public function render($viewName){
     $viewAry=explode('/',$viewName);
     $viewString = implode(DS,$viewAry);
     //implode('string',$array) = join elemetns of an array with a given string
     if (file_exists(ROOT.DS.'app'.DS.'views'.DS.$viewString.'.php')){
        include(ROOT.DS.'app'.DS.'views'.DS.$viewString.'.php');
        include(ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS. $this->_layout.'.php');
     }else{
       die('The view \"'.$viewName.'\" does not exist.');
     }

   }

   public function content($type){
     if ($type=='head'){
       return $this->_head;
     }elseif($type=='body'){
       return $this->_body;
     }
     return false;
   }

   public function start($type){
      $this->_outputBuffer=$type;
      ob_start();
      //usually as soon as a function is executed the dat is sent to the browser . but in case if you want php to hold on the data for
      //a few time period ,then use ob_start() .This will create a buffer and willl temperoly store the data in it.
   }

   public function end(){
      if ($this->_outputBuffer == 'head'){
        $this->_head=ob_get_clean(); // ob_get_clean() grabs all of the data gathered since we called ob_start,
                                    //i.e. everything in the buffer. Usually, you’ll assign this to a variable.
      }elseif($this->_outputBuffer == 'body'){
        $this->_body = ob_get_clean();
      }else{
        die('You must first run the start method.');
      }
   }

   public function siteTitle(){
     return $this->_siteTitle;
   }

   public function setSiteTitle($title){
     $this->_siteTitle=$title;
   }

   public function setLayout($path){
     $this->_layout = $path;
   }

  //  public function insert($path){
  //    include ROOT.DS.'app'.DS.'views'.DS.$path .'.php';
  //  }

    public function partial($group,$partial){
      include ROOT.DS.'app'.DS.'views'.DS.$group.DS.'partials'.DS.$partial.'.php';
    }
 }
