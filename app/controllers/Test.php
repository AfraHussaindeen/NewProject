<?php

class Test extends Controller{
    public function __construct($controller,$action){
        parent::__construct($controller,$action);
        $this->view->setLayout('default');
        $this->load_model("Tests");
    }

    public function indexAction(){
        $contacts= $this->TestsModel->findAllByUserId(currentUser()->id,['order'=>'lname','fname']);
        // dnd($contacts);
        $this->view->contacts=$contacts; //Sending the the data $contacts to the view page.
        $this->view->render('test/index');
    }

    public function addAction(){
        $this->view->render('test/add');
    }
}