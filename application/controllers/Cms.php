<?php

class Cms extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('cms_model');
    $this->layout->set_theme('themes/apland-4.3.0');
  }

  function home() {
    $this->layout->view('home');
  }

  function contact() {
    $this->layout->view('contact');
  }

  function page($page_id) {
    $data['page'] = $this->cms_model->get_page($page_id);
    $this->layout->view('page', $data);
  }

  function blog() {
    $data['posts'] = $this->cms_model->get_posts();
    $this->layout->view('blog', $data);
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

  function posts() {
    $data['posts'] = $this->cms_model->get_posts();
    $this->layout->view('posts/index', $data, 'admin_layout');
  }

  function add_post() {
    if ($this->input->post()) {
      $post = post_form();
      post_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->cms_model->save_post($post);
        redirect('posts');
      }
    }
    $this->layout->view('posts/add', null, 'admin_layout');
  }

  function edit_post($post_id) {
    if ($this->input->post()) {
      $post = post_form();
      post_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->cms_model->update_post($post, $post_id);
        redirect('posts');
      }
    }
    $data['post'] = $this->cms_model->get_post($post_id);
    $this->layout->view('posts/edit', $data, 'admin_layout');
  }

  function delete_post($post_id) {
    $this->cms_model->delete_post($post_id);
    redirect('posts');
  }

  function pages() {
    $data['pages'] = $this->cms_model->get_pages();
    $this->layout->view('pages/index', $data, 'admin_layout');
  }

  function add_page() {
    if ($this->input->post()) {
      $page = page_form();
      page_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->cms_model->save_page($page);
        redirect('pages');
      }
    }
    $this->layout->view('pages/add', null, 'admin_layout');
  }

  function edit_page($page_id) {
    if ($this->input->post()) {
      $page = page_form();
      page_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->cms_model->update_page($page, $page_id);
        redirect('pages');
      }
    }
    $data['page'] = $this->cms_model->get_page($page_id);
    $this->layout->view('pages/edit', $data, 'admin_layout');
  }

  function delete_page($page_id) {
    $this->cms_model->delete_page($page_id);
    redirect('pages');
  }

  // End administrative functions
}
