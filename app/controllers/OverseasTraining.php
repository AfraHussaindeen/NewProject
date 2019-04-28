<?php

class OverseasTraining extends Controller{
    public function __construct($controller , $action){
      parent::__construct($controller,$action);
      $this->load_model('Training');
      $this->view->setLayout('default'); 
    }

    public function indexAction(){
        $validation = new Validate();
        $submitted = false;
        $posted_values =['nameInitial'=>'', 'regNumber'=>'', 'email'=>'' , 'contact'=>'' , 'field'=>'', 'departure'=>'','arrival'=>''];
        if($_POST){
          $posted_values = posted_values($_POST);
          $validation->check($_POST ,[
              'arrival'=>[
                  'display'=>'Date of arrival',
                  'required'=> true,
              ],
              'departure'=>[
                'display'=>'Date of departure',
                'required' => true,
                'is_date_greater' => 'arrival'
            ]
          ]);
          
          if ($validation->passed()){
            $newForm = new Training();
            $newForm->addNewApplication($_POST);
            Session::addMsg('success','Successfully Submitted.');
            $submitted=true;
          }
        }

        if($submitted){
          $posted_values =['nameInitial'=>'', 'regNumber'=>'', 'email'=>'' ,  'subject'=>'', 'message'=>''];
        }
    $this->view->post = $posted_values;
    $this->view->displayErrors = $validation->displayErrors();
    $this->view->render('overseasTraining/index');

  }


}

