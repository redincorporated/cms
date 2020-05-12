<?php

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('post_model');
  }

  function index() {
    $this->layout->view('home');
  }

  function blog() {
    $data['posts'] = $this->post_model->find_all();
    $this->layout->view('blog/index', $data);
  }

  function contact() {
    $this->layout->view('contact');
  }

}
