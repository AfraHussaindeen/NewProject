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
=======
<<<<<<< HEAD
>>>>>>> SubjectClerkOverseas
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
<<<<<<< HEAD
                
                    $name = $_POST['nameInitial'];
                    $email = $_POST['email'];
                    $subject = $_POST['email'];
                    $msg = $_POST['field'];
                    // Content-Type helps email client to parse file as HTML 
                    // therefore retaining styles
                    $headers = "From:yogyagamage@gmail.com \r\n" ;
                    $header .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $message = "<html>
                    <head>
                        <title>New message from website contact form</title>
                    </head>
                    <body>
                        <h1>" . $subject . "</h1>
                        <p>".$msg."</p>
                    </body>
                    </html>";
                    if (mail('yogyagamage@gmail.com', $subject, $message, $headers)) {
                        Session::addMsg('success','Successfully Sent.');;
                    }else{
                        Session::addMsg('unsuccess','unSuccessfull.');;
                    }
                  
                  
                    Router::redirect('SubmittedApplication');
=======
                Router::redirect('SubmittedApplication');
>>>>>>> SubjectClerkOverseas
            }
        }
        $this->view->displayErrors=$validation->displayErrors();
        $this->view->SubmittedApplication=$submittedApplication;
        $this->view->postAction= PROOT.'SubmittedApplication'.DS.'edit'.DS.$submittedApplication->id;
        $this->view->render('SubmittedApplication/edit');
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
>>>>>>> SubjectClerkOverseas
    public function detailsAction($id){
        $notupdated=$this->TrainingModel->findByIdAndUserId((int)$id);
        
        if(!$notupdated){
            Router::redirect('SubmittedAplication');
        }
        $this->view->SubmittedApplication=$notupdated;
        $this->view->render('SubmittedApplication/details');
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> SubjectClerkOverseas
    public function deleteAction($id){
        $submittedApplication=$this->TrainingModel->findByIdAndUserId((int)$id);
        if($submittedApplication){
            $submittedApplication->delete();

        }
        Router::redirect('SubmittedApplication');
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
>>>>>>> SubjectClerkOverseas
}