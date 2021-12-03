<?php

class Suser_model extends CI_Model {
    private $table = "susers";

    public function get_user($useremail, $password ){
        $user = $this->db->where("useremail", $useremail )->where("password", md5($password ))->get($this->table)->result();
        $user = $user && count($user ) > 0 ? $user : FALSE;
        return $user;
    }
}

?>