<?php

class Test extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function a() {
    echo password_hash('a', PASSWORD_DEFAULT);
  }

}
