<?php

class Letter extends Controller{


    public function __construct($controller,$action){
        parent::__construct($controller,$action);
        $this->view->setLayout('default');
        $this->load_model("Letters");
    }

    public function indexAction(){
        $submissions= $this->LettersModel->getAllSubmissions();
        $this->view->submissions=$submissions; //Sending the data $submission to the view page.
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
                 'unique' =>"letters"
              ],
              'regNumber' =>[
                  'display'=>'Reg number',
                 'required' => true,
                 'unique'=>"letters"
              ]
          ]);
          if ($validation->passed()){
            $this->LettersModel->addNewSubmission($_POST);
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

    public function checkSubmissionAction(){
      $nicNumber=currentUser()->nicNumber;
      $check=$this->LettersModel->checkSubmission($nicNumber);
      if (!$check){
        Session::addMsg('danger','No submissions are currently available.');
        $this->view->render('letter/blank');
       
      }else{
        $this->view->subDetails=$check;
        $this->view->render('letter/check');
      }
      
    }

    public function nextStageAction($id){
        $stageName= $this->LettersModel->getStage($id);
        if($stageName != "Stage6"){
          $stage = new $stageName($id); 
          $stage->next();
        }
        Router::redirect('letter');
    
    }
}