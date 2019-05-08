<?php

class SubmittedApplication extends Controller{


    public function __construct($controller,$action){
        parent::__construct($controller,$action);
        $this->view->setLayout('default');
        $this->load_model("Training");
    }
    public function indexAction(){
        $updated=$this->TrainingModel->findAllByUserId(1,['order'=>'id']);
        $notupdated=$this->TrainingModel->findAllByUserId(0,['order'=>'id']);
        $this->view->updated=$updated;
        $this->view->notupdated=$notupdated;
        $this->view->render('SubmittedApplication/index');
        
    }
<<<<<<< HEAD
    public function editAction($id){
        $submittedApplication=$this->TrainingModel->findByIdAndUserId((int)$id);
        if(!$submittedApplication){
            Router::redirect('SubmittedApplication');
        }
        
        $validation=new Validate();
        if($_POST){
            $submittedApplication->assign($_POST);
            $validation->check($_POST ,[
                
                'departure'=>[
                  'display'=>'Date of departure',
                  'required' => true,
                  
                ],
                'arrival'=>[
                    'display'=>'Date of arrival',
                    'required'=> true,
                    'is_date_greater' => 'departure'
                ]
            ]);
            if ($validation->passed()){
                $submittedApplication->save();
                $submittedApplication=$this->TrainingModel->update((int)$id,['status'=>'1']);
                Router::redirect('SubmittedApplication');
            }
        }
        $this->view->displayErrors=$validation->displayErrors();
        $this->view->SubmittedApplication=$submittedApplication;
        $this->view->postAction= PROOT.'SubmittedApplication'.DS.'edit'.DS.$submittedApplication->id;
        $this->view->render('SubmittedApplication/edit');
    }
=======
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
    public function detailsAction($id){
        $notupdated=$this->TrainingModel->findByIdAndUserId((int)$id);
        
        if(!$notupdated){
            Router::redirect('SubmittedAplication');
        }
        $this->view->SubmittedApplication=$notupdated;
        $this->view->render('SubmittedApplication/details');
    }
<<<<<<< HEAD
    public function deleteAction($id){
        $submittedApplication=$this->TrainingModel->findByIdAndUserId((int)$id);
        if($submittedApplication){
            $submittedApplication->delete();

        }
        Router::redirect('SubmittedApplication');
    }
=======
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
}