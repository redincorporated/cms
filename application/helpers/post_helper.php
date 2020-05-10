<?php

function post_form() {
  $obj = &get_instance();
  return array(
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