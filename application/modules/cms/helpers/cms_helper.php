<?php

function login_form() {
  $obj = &get_instance();
  return array(
    $obj->input->post('username'),
    $obj->input->post('password'),
  );
}

function theme_path() {
  $obj = &get_instance();
  return trimmed_base_url() . '/application/views/' . $obj->layout->get_theme();
}
