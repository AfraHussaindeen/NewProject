<?php

class Home extends Controller{
    public function __construct($controller , $action){
      parent::__construct($controller,$action);
    }
    public function indexAction(){
      $db = DB :: getInstance();
      $fields=[
        'fname'=>'aaqil',
        'email'=> 'anas2gmail.com'
      ];
      $contactsQ=$db->query("SELECT * FROM contacts ORDER BY lname,fname")->first();
dnd($contactsQ->fname);

      $this->view->render('home/index');
    }
}
