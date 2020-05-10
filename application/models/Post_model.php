<?php

class Post_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function find_all() {
    return $this->db->get('posts')->result();
  }

  function read($id) {
    return $this->db->get_where('posts', array('id' => $id))->row();
  }

  function save($post) {
    $this->db->insert('posts', $post);
  }

  function update($post, $id) {
    $this->db->update('posts', $post, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('posts', array('id' => $id));
  }

}