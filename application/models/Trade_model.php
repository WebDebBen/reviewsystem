<?php

class Trade_model extends CI_Model {
    private $table = "trades";

    public function insert_entry($data){
        $this->db->insert($this->table, $data );
    }

    public function update_entry($data, $id ){
        $this->db->update($this->table, $data, array('id'=> $id ));
    }

    public function delete_entry($id ){
        $this->db->delete($this->table, array('id'=> $id ));
    }

    public function load_data($page = '', $page_size = '', $category ='', $search = '' ){
        $this->db->select("trades.*, categories.cat_name category_name")
                ->join("categories", "categories.id=trades.category_id");
        if ($search != '' ){
            $this->db->like($search );
        }

        if ($category != '' ){
            $this->db->where("category_id", $category ); 
        }

        if ($page_size != '' && $page != ''){
            $start = ($page - 1) * $page_size;
            $this->db->limit($page_size, $start );
        }
        return $this->db->get($this->table )->result();
    }

    public function total_count($category ='', $search = '' ){
        if ($search != '' ){
            $this->db->like($search );
        }

        if ($category != '' ){
            $this->db->where("category_id", $category ); 
        }

        return count($this->db->get($this->table )->result());
    }

    public function get_data($id ){
        return $this->db->where("id", $id )->get($this->table )->row();
    }
}

?>