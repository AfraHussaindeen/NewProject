<?php

class Router{

    public static function route($url){

      //controller
      //ucwords($name) is used to convert the first character into  upper case
      $controller =  (isset($url[0])  && $url[0] != "" ) ?  ucwords($url[0]): DEFAULT_CONTROLLER ;
      $controller_name=$controller;
      array_shift($url); //remove the first element in the array


      //action
      $action =  (isset($url[0])  && $url[0] != "" ) ?  $url[0]. "Action": "indexAction" ;
      $action_name=$controller;
      array_shift($url); //remove the first element in the array

      //fann_clear_scaling_params
      $queryparams=$url;

      $dispatch = new $controller($controller_name,$action);

      //method_exists(class_name,method_name)
      //call_user_fun_array([object,method],parameters)
      if (method_exists($controller,$action)){
        call_user_func_array([$dispatch , $action],$queryparams);
		//similar to dispatch -> registerindex($queryparam);
      }else{
        die ('The method does not exist in the controller \"'. $controller_name . '\"');
      }

    }
}
