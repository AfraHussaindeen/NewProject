<?php

class Contact extends Controller{
    public function __construct($controller , $action){
      parent::__construct($controller,$action);
    }
    public function indexAction(){
                   
        $validation = new Validate();
        $submitted = false;
        $posted_values =['nameInitial'=>'', 'regNumber'=>'', 'email'=>'' ,  'subject'=>'', 'message'=>''];
        if($_POST){
          $posted_values = posted_values($_POST);
          $validation->check($_POST ,[
              'nameInitial'=>[
                  'display'=>'Name with initials',
                  'required'=> true,
              ],
              'regNumber'=>[
                'display'=>'Register number'
              ],
              'email'=>[
                'display'=>'Email',
                'required'=> true,
                'valid_email' =>true
              ],
              'subject'=>[
                'display'=>'Subject',
                'required'=> true,
              ],
              'message'=>[
                'display'=>'Message',
                'required'=> true,
              ]
            ]);
          
          if ($validation->passed()){
            $newForm = new Contacts();
            $newForm->addNewForm($_POST);
            Session::addMsg('success','Successfully Submitted.');
            $submitted=true;
          }

          
        }
        if($submitted){
          $posted_values =['nameInitial'=>'', 'regNumber'=>'', 'email'=>'' ,  'subject'=>'', 'message'=>''];
        }
          $this->view->post = $posted_values;
          $this->view->displayErrors = $validation->displayErrors();
          $this->view->render('contact/index');
        
   
    }
}
