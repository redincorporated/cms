<?php

function login_form() {
  $obj = &get_instance();
  return array(
    $obj->input->post('username'),
    $obj->input->post('password'),
  );
}

function page_form() {
  $obj = &get_instance();
  return array(
    'title' => $obj->input->post('title'),
    'content' => $obj->input->post('content'),
  );
}

function page_form_validate() {
  $obj = &get_instance();
  $obj->form_validation->set_rules('title', 'Title', 'required');
  $obj->form_validation->set_rules('content', 'Content', 'required');
}

function post_form($user_id) {
  $obj = &get_instance();
  return array(
    'user_id' => $user_id,
    'date' => now(),
    'title' => $obj->input->post('title'),
    'content' => $obj->input->post('content'),
  );
}

function post_form_validate() {
  $obj = &get_instance();
  $obj->form_validation->set_rules('title', 'Title', 'required');
  $obj->form_validation->set_rules('content', 'Content', 'required');
}

function comment_form($post_id) {
  $obj = &get_instance();
  return array(
    'post_id' => $post_id,
    'date' => now(),
    'name' => $obj->input->post('name'),
    'email' => $obj->input->post('email'),
    'comments' => $obj->input->post('comments'),
  );
}

function get_posts() {
  $obj = &get_instance();
  return $obj->cms_model->get_posts();
}

function get_post_comments($post_id) {
  $obj = &get_instance();
  return $obj->cms_model->get_post_comments($post_id);
}

function get_pages() {
  $obj = &get_instance();
  return $obj->cms_model->get_pages();
}

function section($page) {
  $obj = &get_instance();
  $obj->load->view(get_theme() . '/' . $page);
}

function theme_path() {
  $obj = &get_instance();
  return trimmed_base_url() . '/application/views/' . $obj->layout->get_theme();
}