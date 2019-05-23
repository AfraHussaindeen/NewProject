<?php

class Notice extends Controller{
    public function __construct($controller , $action){
      parent::__construct($controller,$action);
    }
    public function indexAction(){
      ?>
      <script>
      window.open("http://www.health.gov.lk/CMS/cmsmoh1/"); </script>
      <?php
      
      $this->view->render('home/index');
    }
}
