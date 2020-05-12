<?php

class Admin extends MY_AdminController {

  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

  function login() {
    $data['message'] = '';
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($username, $password);
      if ($user) {
        session('user_id', $user->id);
        session('username', $user->username);
        redirect('posts');
      } else {
        $data['message'] = 'Invalid username or password. Please try again!';
      }
    }
    $this->load->view(get_theme() . '/admin/login', $data);
  }

}
