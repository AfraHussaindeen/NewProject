<?php

class Register extends Controller{
    public function __construct($controller , $action){
        parent::__construct($controller , $action);
        $this->load_model('Users'); 
    }

    public function loginAction(){
        
        $validation = new Validate();
        if($_POST){
            //form validation
            $validation->check($_POST,[
                'nicNumber' => [
                    'display'=>"NIC Number",
                    'required' => true
                ],
                'password' => [
                    'display'=> 'Password',
                    'required' => true,
                    'min'=>6
                ]
            ]);
            
            if ($validation->passed()){
                $user = $this->UsersModel->findByNICnumber($_POST['nicNumber']);
               
                if($user && password_verify(Input::get('password'),$user->password)){
                    $remember = (isset ($_POST['remember_me']) && Input::get('remember_me'))? true :false;
                    $user->login($remember);
                    Router::redirect('');
                }else{
                    $validation->addError("There is an error with your NIC number or password.");
                }
            }
        }
        $this->view->displayErrors= $validation->displayErrors();
        $this->view->render('register/login');
    }


    public function logoutAction(){
        if (currentUser()){
            currentUser()->logout();
        }
        
        Router::redirect('register/login');
    }

    public function registerAction(){
        $validation = new Validate();
        $submitted=false;
        $posted_values =['fname'=>'', 'nameInitial'=>'', 'nicNumber'=>'' , 'email'=>'' , 'password'=>'', 'confirm'=>'','regNumber'=>'','contact'=>'' ];
        if($_POST){
            $posted_values = posted_values($_POST);
            $validation->check($_POST ,[
                'fname'=>[
                    'display'=>'First Name',
                    'required'=> true
                ],
                'nameInitial'=>[
                    'display'=>'Name with Initials',
                    'required'=> true
                ],
                'nicNumber'=>[
                    'display'=>'NIC number',
                    'required'=> true,
                    'unique' => 'users',
                    'min' => 10,
                    'max'=> 25
                ],
                'email'=>[
                    'display'=>'Email',
                    'required'=> true,
                    'unique' =>'users',
                    'max'=> 150,
                    'valid_email' => true
                ],
                'password'=>[
                    'display'=>'Password',
                    'required'=> true,
                    'min' =>6
                ],
                'confirm'=>[
                    'display'=>'Confirm Password',
                    'required'=> true,
                    'matches'=>'password'
                ],
                'regNumber'=>[
                    'display'=>'Register Number',
                    'required'=> true,
                    'unique' =>'users'
                ],
                'contact'=>[
                    'display'=>'Contact Number',
                    'required'=> true,
                    //'unique' =>'users',
                    'is_numeric' => true
                ]
            ]);

            if ($validation->passed()){
                $this->UsersModel->registerNewUser($_POST);
                Session::addMsg('success','Successfully Registered.');
                $submitted=true;
            }
        }
        $this->view->post = $posted_values;
        $this->view->displayErrors = $validation->displayErrors();
        if($submitted){
            $this->view->render('register/login');
        }else{
            $this->view->render('register/register');
        }
        
    }

    public function useraccAction($id){
        $user=$this->UsersModel->findById((int)$id);
        if(!$user){
            Router::redirect('Home');
        }
        
        $validation=new Validate();
        if($_POST){
            $user->assign($_POST);
            $validation->check($_POST ,[
                
                'fname'=>[
                    'display'=>'First Name',
                    'required'=> true
                ],
                'nameInitial'=>[
                    'display'=>'Name with Initials',
                    'required'=> true
                ],
                'nicNumber'=>[
                    'display'=>'NIC number',
                    'required'=> true,
                    'min' => 10,
                    'max'=> 25
                ],
                'email'=>[
                    'display'=>'Email',
                    'required'=> true,
                    'max'=> 150,
                    'valid_email' => true
                ],
                
                'regNumber'=>[
                    'display'=>'Register Number',
                    'required'=> true
                ],
                'contact'=>[
                    'display'=>'Contact Number',
                    'required'=> true,
                    'is_numeric' => true
                ]
            ]);
            if ($validation->passed()){
                $updated=$user->save();
                if ($updated){
                    Session::addMsg('success','Successfully updated.');
                }else{
                    Session::addMsg('danger','Error occured');
                }
            }
            
        }
        $this->view->displayErrors=$validation->displayErrors();
        $this->view->User=$user;
        $this->view->postAction= PROOT.'Register'.DS.'useracc'.DS.$user->id;
        $this->view->render('Register/useracc');
    }
}


//echo password_hash('password',PASSWORD_DEFAULT);  
// the first parameter is the the relevant password.
//the above  method returns the hash string of the relevant password


//if($_POST) .................check if there are posted values