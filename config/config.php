<?php

define ("DEFAULT_CONTROLLER","Home"); //default value if there isn't one define
define ('DEBUG',true);
define('DEFAULT_LAYOUT','default');// if no layout is set in the controller use this $_layout

define('SITE_TITLE','Afra mvc framework');//This will be used if no site title is SITE_TITLE
define ('PROOT','/NewProject/');// set this to '/' for a live server'

define('CURRENT_USER_SESSION_NAME','kwXCMFYjdsndmcjNGDmXhDCnhHc');//session name for a logged in user
define('REMEMBER_ME_COOKIE_NAME','HdBnNHnBNgnjBNHgbhhjbVBHGBJHnbb');//cookie name for a loggedd in user remember me
define('REMEMBER_ME_COOKIE_EXPIRY', 2592000);// time in seconds for remember me cookie to live(30 days)

define('ACCESS_RESTRICTED','Restricted');//controller  name for the restricted redirect