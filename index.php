<?php

define ("DS",DIRECTORY_SEPARATOR);
define ("ROOT",dirname(__FILE__)); // Give the location of the file.

//load configuration and helper functions
require_once(ROOT.DS.'config'.DS.'config.php');
require_once(ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.'functions.php');

//Autoload classes
// Using this function the relevant php file is being acccessed.
function autoload($className){

  if (file_exists(ROOT.DS.'core'.DS . $className . '.php')){
    require_once(ROOT.DS.'core'.DS . $className . '.php');
  }
  elseif(file_exists(ROOT.DS.'app'.DS.'controllers'.DS. $className . '.php')){
    require_once(ROOT.DS.'app'.DS.'controllers'.DS. $className . '.php');
  }
  elseif(file_exists(ROOT.DS.'app'.DS.'models'.DS. $className . '.php')){
    require_once(ROOT.DS.'app'.DS.'models'.DS. $className . '.php');
  }
}

//spl-standard php library

spl_autoload_register('autoload');

session_start();

//$_SERVER gives the part of the location except the root.
//die("message") and exit("message") => Output a message and terminate the script
//die and exit are alliases (Diferent name but same meaning).
//explode("character",$str,limit(optional)) => used to split a string into array with a specified character

//isset() => Check whether a variable is set or not

//require() => if file not found produce an error and stop the program
//include() => if file not found produce an error , but script will continue

//() ? : ;    Similar to if else statements
//(condition) ? if yes exexute this : else execute this ;
$url =isset($_SERVER["PATH_INFO"]) ? explode ('/',ltrim($_SERVER['PATH_INFO'],'/')) : [];
//var_dump($name) => print the elements of the array

//Route the Request.
//Router is the class
// route() is a defined method in the Router class .
Router:: route($url);
