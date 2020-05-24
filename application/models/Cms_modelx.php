<?php

class Cms_modelx extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  // Start page functions
  function get_pages() {
    return $this->db->get('pages')->result();
  }

  function get_page($page_id) {
    return $this->db->get_where('pages', array('id' => $page_id))->row();
  }

  function get_page_by_name($page_nmae) {
    return $this->db->get_where('pages', array('name' => $page_nmae))->row();
  }

  function read_page($page_id) {
    return $this->db->get_where('pages', array('id' => $page_id))->row();
  }

  function save_page($page) {
    $this->db->insert('pages', $page);
  }

  function update_page($page, $page_id) {
    $this->db->update('pages', $page, array('id' => $page_id));
  }

  function delete_page($page_id) {
    $this->db->delete('pages', array('id' => $page_id));
  }

  // End post functions
  // Start comments functions
  function get_post_comments($post_id) {
    $this->db->where('post_id', $post_id);
    return $this->db->get('post_comments')->result();
  }

  function save_post_comment($comment) {
    $this->db->insert('post_comments', $comment);
  }

  // End comments functions
}
