<?php

class OverseasTraining extends Controller{
    public function __construct($controller , $action){
      parent::__construct($controller,$action);
      $this->load_model('Training');
    }

    public function submitAction(){
        $validation = new Validate();
        $submitted = false;
        $posted_values =['nameInitial'=>'', 'regNumber'=>'', 'email'=>'' , 'contact'=>'' , 'field'=>'', 'departure'=>'','arrival'=>''];
        if($_POST){
          $posted_values = posted_values($_POST);
          $validation->check($_POST ,[
              'arrival'=>[
                  'display'=>'Date of arrival',
                  'required'=> true,
                  'is_date_greater' => 'departure'
              ],
              'departure'=>[
                'display'=>'Date of departure',
                'required' => true
            ]
          ]);
          
          if ($validation->passed()){
            $this->TrainingModel->addNewApplication($_POST);
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

