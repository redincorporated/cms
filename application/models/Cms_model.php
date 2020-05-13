<?php

class Cms_model extends CI_Model {

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

  // End page functions
  // Start post functions
  function get_posts() {
    return $this->db->get('posts')->result();
  }

  function get_post($post_id) {
    return $this->db->get_where('posts', array('id' => $post_id))->row();
  }

  function save_post($post) {
    $this->db->insert('posts', $post);
  }

  function update_post($post, $post_id) {
    $this->db->update('posts', $post, array('id' => $post_id));
  }

  function get_user_by_username_and_password($username, $password) {
    $this->db->where('username', $username);
    $this->db->or_where('email', $username);
    $user = $this->db->get('users')->row();
    if ($user && password_verify($password, $user->password)) {
      return $user;
    }
    return null;
  }

  function delete_post($post_id) {
    $this->db->delete('posts', array('id' => $post_id));
  }

  // End post functions
}
