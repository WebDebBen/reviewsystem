<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        
        $uri = uri_string();

        // $userdata = $this->session->userdata("user");
        // if (!$userdata ){
        //     if (strpos($uri, "admin") > -1){
        //         redirect(base_url("user/login"));
        //     }
        // }else{
        //     if (strpos($uri, "login")){
        //         redirect(base_url("review"));
        //     }
        // }
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

	public function load_trade(){
		extract($this->input->post());

		$trades = $this->trade_m->load_data_for_review($page, $page_size, $category_id );
		$trade_count = $this->trade_m->total_count($category_id );

		$data = $this->load->view("admin/template/trade_data_for_review", compact("trades" ), TRUE );
		$pagination = $this->load->view("admin/template/pagination", compact("trade_count", "page", "page_size"), TRUE );

		echo json_encode(["result"=> "success", "data"=> $data, "pagination"=> $pagination ]);
	}
}
