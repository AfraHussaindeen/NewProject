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
    public function detailsAction($id){
        $notupdated=$this->TrainingModel->findByIdAndUserId((int)$id);
        
        if(!$notupdated){
            Router::redirect('SubmittedAplication');
        }
        $this->view->SubmittedApplication=$notupdated;
        $this->view->render('SubmittedApplication/details');
    }
}