<?php

class User_model extends CI_model {

    public function validate_credentials($data) {
//        $data = array('username' => $username, 'password' => $password);
        $query = $this->db->get_where('user_deatils', data);
        $user = $query->result();
        if (count($user) == 1) {
            return $user[0];
        } else {
            return false;
        }
    }

}

function saveUser($object) {
    $this->db->insert('user_details', $object);
    return $this->db->insert_id();
}
?>

