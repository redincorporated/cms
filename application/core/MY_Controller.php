<?php

class MY_Controller extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

}

class MY_AdminController extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->layout->set_theme('simple');
    $this->layout->set_layout('admin_layout');
  }

}

