<?php

class Cmsx extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('cms_model');
    $this->layout->set_theme('themes/apland-4.3.0');
  }

  function contact() {
    $this->layout->view('contact');
  }

  function page($page_name) {
    $data['page'] = $this->cms_model->get_page_by_name($page_name);
    $this->layout->view('page', $data);
  }

  function blog() {
    $data['posts'] = $this->cms_model->get_posts();
    $this->layout->view('blog', $data);
  }

  function post($post_id) {
    $data['post'] = $this->cms_model->get_post($post_id);
    $this->layout->view('post', $data);
  }

  function leave_comment($post_id) {
    $comment = comment_form($post_id);
    $this->cms_model->save_post_comment($comment);
    redirect('post/' . $post_id);
  }

  function show_404() {
    $this->load->view(get_theme() . '/404');
  }

  // Administrative functions

  function setup() {

  }

  function admin_login() {
    $data['message'] = '';
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->cms_model->get_user_by_username_and_password($username, $password);
      if ($user) {
        session('user_id', $user->id);
        session('username', $user->username);
        redirect('posts');
      } else {
        $data['message'] = 'Invalid username or password. Please try again!';
      }
    }
    $this->load->view('admin/login', $data);
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('.');
  }

  // End administrative functions
  // API functions

  function list_post() {
    header('Content-Type: application/json');
    if ($this->input->post()) {
      $user = $this->cms_model->get_user_by_token($this->input->post('token'));
      if ($user) {

      } else {
        echo json_encode(array('status' => 'Invalid token'));
      }
    } else {
      echo json_encode(array('status' => 'Request should be POST'));
    }
  }

  // And API functions
}
