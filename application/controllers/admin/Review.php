<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/Middle.php";
class Review extends Middle {

	public function __construct()
    {
        parent::__construct();
	}
	
	public function index()
	{
        $header_data = [
            "title"=> "Review List"
        ];

        $side_data = [
            "title"=> "Review List"
        ];

		$footer_data = [
			"scripts"=> [
				"review.js"
			]
		];

		$data = [
            "categories"=> $this->category_m->load_data()
		];

		$this->load->view("admin/layout/header", $header_data );
		$this->load->view("admin/layout/sidebar", $side_data);
		$this->load->view("admin/review", $data);
		$this->load->view("admin/layout/footer", $footer_data );
	}

	public function item($trade_id ){
        $header_data = [
            "title"=> "Review Item"
        ];

        $side_data = [
            "title"=> "Review Item"
        ];

		$footer_data = [
			"scripts"=> [
				"review_item.js"
			]
		];

		$data = [
            "reviews"=> $this->review_m->load_item_data($trade_id )
		];

		$this->load->view("admin/layout/header", $header_data );
		$this->load->view("admin/layout/sidebar", $side_data);
		$this->load->view("admin/review_item", $data);
		$this->load->view("admin/layout/footer", $footer_data );	
	}

	public function load_trade(){
		extract($this->input->post());

		$trades = $this->trade_m->load_data_for_review($page, $page_size, $category_id );
		$trade_count = $this->trade_m->total_count($category_id );

		$data = $this->load->view("admin/template/trade_data_for_review", compact("trades" ), TRUE );
		$pagination = $this->load->view("admin/template/pagination", compact("trade_count", "page", "page_size"), TRUE );

		echo json_encode(["result"=> "success", "data"=> $data, "pagination"=> $pagination ]);
	}

	public function change_status(){
		extract($this->input->post());

		$this->review_m->update_status($review_id, $status );
		echo json_encode(["result"=> "success" ]);
	}
}
