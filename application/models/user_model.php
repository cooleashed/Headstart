<?php

class User_model extends CI_model {
    
    function saveUser($object) {
        $this->db->insert('user_details', $object);
        return $this->db->insert_id();
    }
    
}
?>

