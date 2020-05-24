<?php

class Post_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function find_all() {
    $this->db->select('p.*');
    $this->db->select('u.username');
    $this->db->join('users u', 'u.id = p.user_id');
    $this->db->order_by('p.date', 'desc');
    return $this->db->get('posts p')->result();
  }

  function read($post_id) {
    $this->db->select('p.*');
    $this->db->select('u.username');
    $this->db->join('users u', 'u.id = p.user_id');
    return $this->db->get_where('posts p', array('p.id' => $post_id))->row();
  }

  function save($post) {
    $this->db->insert('posts', $post);
  }

  function update($post, $post_id) {
    $this->db->update('posts', $post, array('id' => $post_id));
  }

  function delete($post_id) {
    $this->db->delete('posts', array('id' => $post_id));
  }

}
