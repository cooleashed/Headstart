<?php

class contacts_model extends CI_model {
    
    function saveUser($object) {
        $this->db->insert('Contacts', $object);
        return $this->db->insert_id();
    }
    
    function deleteUser($object) {
        $this->db->delete('Contacts', $object);
        //return $this->db->insert_id();
    }
    
    function updateUser($object) {
        $this->db->insert('Contacts', $object);
        return $this->db->insert_id();
        return TRUE;
    }
    
    function searchUser($keyword) {
        $this->db->select('first_name, last_name');
        $this->db->like('first_name', $keyword);
        $this->db->or_like('last_name', $keyword);
        $query = $this->db->get('Contacts');
        $answer = $query->result();
    }
    
    
}
?>

