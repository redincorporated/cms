<?php

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

function get_pages() {
  $obj = &get_instance();
  return $obj->page_model->find_all();
}

function section($page) {
  $obj = &get_instance();
  $obj->load->view('themes/' . config_item('cms_theme') . '/' . $page);
}

//function load_view($view, $data, $theme) {
//  $obj = &get_instance();
//  $x = $theme ? 'themes/' . $theme . '/' : '';
//  $obj->load->view($x . $view);
//}

function load_view($view, $data, $layout = 'layout', $theme = '') {
  $obj = &get_instance();
  $theme = $theme !== null ? $theme : 'themes/' . config_item('cms_theme');
  $data['content'] = $obj->load->view($theme . '/' . $view, $data, TRUE);
  $obj->load->view($theme . '/' . $layout, $data);
}

function cms_theme_url() {
  return 'http://localhost:8888/red/cms/application/modules/cms/views/themes/apland-4.3.0';
}
