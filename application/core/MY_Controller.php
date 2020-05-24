<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller {

  function __construct() {
    parent::__construct();
  }

}

class MY_AdminController extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->layout->set_theme('');
    $this->layout->set_layout('admin_layout');
  }

}
