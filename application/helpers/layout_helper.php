<?php

function get_theme() {
  $obj = &get_instance();
  $obj->load->library('layout');
  return $obj->layout->get_theme();
}

function section($page) {
  $obj = &get_instance();
  $obj->load->view(get_theme() . '/' . $page);
}