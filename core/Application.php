<?php

class Application{
	//__construct() is called once an object is created or simply when new operator is used.
	public function __construct(){
		$this -> _set_reporting();
		$this -> _unregister_globals();
	}

	private function _set_reporting(){
		if (DEBUG){
			error_reporting(E_ALL); //Allows the programmer to control which and how many errrors will be shown in Application
			//ini_set($variable,$value)  assign the $valu to $variable
			ini_set('display_errors',1);//setting display_errors to 1 imples that the errors should be displayed
		}else{
			error_reporting(0); //turn of error reporting
			ini_set('display_errors',0);
			ini_set('log_errors',1);
			// log_errors : Tells whether script error messages should be logged to the server's error log or error_log.
			//This option is thus server-specific.
			//You're strongly advised to use error logging in place of error displaying on production web sites
			ini_set('error-log',ROOT.DS.'temp'.DS.'logs'.DS.'errors.log');

		}

	}

	private function _unregister_globals(){
		if (ini_get('register_globals')){
			$globalsAry = array('_SESSION','_COOKIE','_POST','_GET' , '_REQUEST','_SERVER','_ENV','_FILES');
			//Session variables  store user information to be used across multiple pages . By default, session variables last until the user closes the browser.
			foreach ($globalsAry as $g){
				foreach($GLOBALS[$g] as $k => $v){
					if ($GLOBALS[$k] === $v){
						unset($GLOBALS[$k]); // $GLOBALS - references all variables available in global scope.
					}
				}
			}
		}
	}

}
