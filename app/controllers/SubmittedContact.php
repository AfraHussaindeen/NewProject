<?php

class SubmittedContact extends Controller{


    public function __construct($controller,$action){
        parent::__construct($controller,$action);
        $this->view->setLayout('default');
        $this->load_model("Contacts");
    }
    public function indexAction(){
        $updated=$this->ContactsModel->findAllByUserId(['order'=>'id']);
        $this->view->updated=$updated;
        $this->view->render('SubmittedContact/index');
        
    }
    
    public function detailsAction($id){
        $updated=$this->ContactsModel->findByIdAndUserId((int)$id);
        
        if(!$updated){
            Router::redirect('SubmittedContact');
        }
        $this->view->SubmittedContact=$updated;
        $this->view->render('SubmittedContact/details');
    }
    public function deleteAction($id){
        $submittedContact=$this->ContactsModel->findByIdAndUserId((int)$id);
        if($submittedContact){
            $submittedContact->delete();

        }
        Router::redirect('SubmittedContact');
    }
}