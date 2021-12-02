<?php

class Category_model extends CI_Model {
    private $table = "categories";

    public function insert_entry($data){
        $this->db->insert($this->table, $data );
    }

    public function update_entry($data, $id ){
        $this->db->update($this->table, $data, array('id'=> $id ));
    }

    public function delete_entry($id ){
        $this->db->delete($this->table, array('id'=> $id ));
    }

    public function load_data($page = '', $page_size = '', $search = '' ){
        if ($search != '' ){
            $this->db->like($search );
        }

        if ($page_size != '' && $page != ''){
            $this->db->limit($page_size, $page );
        }
        return $this->db->get($this->table )->result();
    }
}

?>