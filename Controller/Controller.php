<?php

define('LOGINFORM', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/loginForm');
define('LOGOUT', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/logOut');
define('ADMIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/admin');

class Controller {

  protected $view;
  protected $model;

  public function __construct() {
      
  }

}