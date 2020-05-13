<?php

class Layout {

  function __construct($layout = 'layout') {
    $this->layout = $layout;
    $this->theme = config_item('theme');
    $this->obj = &get_instance();
  }

  function view($view, $data = null, $layout = '', $theme = '') {
    if ($layout) {
      $this->set_theme($theme);
    }
    if ($theme) {
      $this->set_layout($layout);
    }
    $data['content'] = $this->obj->load->view($this->theme . '/' . $view, $data, TRUE);
    $this->obj->load->view($this->theme . '/' . $this->layout, $data);
  }

  function set_layout($layout) {
    $this->layout = $layout;
  }

  function set_theme($theme) {
    $this->theme = $theme;
  }

  function get_theme() {
    return $this->theme;
  }

}
