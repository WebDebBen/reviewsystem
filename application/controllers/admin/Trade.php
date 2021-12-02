<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trade extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $header_data = [
            "title"=> "Trade List"
        ];

        $side_data = [
            "title"=> "Trade List"
        ];

		$footer_data = [
			"scripts"=> [
				"trade.js"
			]
		];

		$data = [
            "categories"=> $this->category_m->load_data()
		];

		$this->load->view("admin/layout/header", $header_data );
		$this->load->view("admin/layout/sidebar", $side_data);
		$this->load->view("admin/trade", $data);
		$this->load->view("admin/layout/footer", $footer_data );
	}

	public function load_trade(){
		extract($this->input->post());

		$trades = $this->trade_m->load_data($page, $page_size, $category_id );
		$trade_count = $this->trade_m->total_count($category_id );

		$data = $this->load->view("admin/template/trade_data", compact("trades" ), TRUE );
		$pagination = $this->load->view("admin/template/pagination", compact("trade_count", "page", "page_size"), TRUE );

		echo json_encode(["result"=> "success", "data"=> $data, "pagination"=> $pagination ]);
	}

	public function save_trade(){
		extract($this->input->post());

		if ($trade_id == "-1" ){
			$this->trade_m->insert_entry($data );
		}else{
			$this->trade_m->update_entry($data, $trade_id );
		}
		echo json_encode(["result"=> "success" ]);
	}

	public function delete_trade(){
		extract($this->input->post());
		$this->trade_m->delete_entry($trade_id );
		echo json_encode(["result"=> "success"]);
	}
}
