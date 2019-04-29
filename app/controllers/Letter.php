<?php

class Letter extends Controller{
    public function __construct($controller,$action){
        parent::__construct($controller,$action);
        $this->view->setLayout('default');
        $this->load_model("Letters");
    }

    public function indexAction(){
        $submissions= $this->LettersModel->getAllSubmissions();
        $this->view->submissions=$submissions; //Sending the the data $contacts to the view page.
        $this->view->render('letter/index');
    }

    public function addAction(){
        $validation = new Validate();
        $submitted = false;
        $posted_values =['nameInitial'=>'', 'nicNumber'=>'', 'regNumber'=>'' ];
        if($_POST){
          $posted_values = posted_values($_POST);
          $validation->check($_POST ,[
              'nameInitial'=>[
                'display'=>'Name with Initials',
                  'required'=> true
              ],
              'nicNumber'=>[
                  'display'=>'NIC number',
                 'required' => true,
                 'unique' =>true
              ],
              'regNumber' =>[
                  'display'=>'Reg number',
                 'required' => true,
                 'unique'=>true
              ]
          ]);
          
          if ($validation->passed()){
            $newForm = new Letters();
            $newForm->addNewSubmission($_POST);
            Session::addMsg('success','Successfully Submitted.');
            $submitted=true;
          }
        }

        if($submitted){
          $posted_values =['nameInitial'=>'', 'nicNumber'=>'', 'regNumber'=>'' ];
        }
    $this->view->post = $posted_values;
    $this->view->displayErrors = $validation->displayErrors();
    $this->view->render('letter/add');

    }

    public function deleteAction($id){
      if($this->LettersModel->findById($id)){
          $this->LettersModel->delete($id);
      }
      Router::redirect('letter');
    }

    public function checkSubmissionAction($nicNumber){
      return $this->LettersModel->checkSubmission($nicNumber);
      
    }
}