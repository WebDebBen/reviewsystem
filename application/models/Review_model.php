<?php

class Review_model extends CI_Model {
    private $table = "reviews";

    public function insert_entry($data){
        $this->db->insert($this->table, $data );
    }

    public function update_entry($data, $id ){
        $this->db->update($this->table, $data, array('id'=> $id ));
    }

    public function delete_entry($id ){
        $this->db->delete($this->table, array('id'=> $id ));
    }

    public function load_reviews($category_id = ''){
        $query = "select 
                    trades.*, avg(reviews.rate) avg_rate
                from trades
                left join reviews on trades.id=reviews.trade_id and reviews.status=2 where 1=1 ";
        if ($category_id != '' ){
            $query .= ' and trades.category_id=' . $category_id;
        }
        $query .= " group by trades.id order by avg_rate desc";

        return $this->db->query($query )->result();
    }

    public function reviews_by_trade($trade_id ){
        return $this->db->where("trade_id", $trade_id )->where("status", 2)->get($this->table )->result();
    }
}

?>