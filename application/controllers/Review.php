<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

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

	public function __construct()
    {
        parent::__construct();
        
        $uri = uri_string();

        $userdata = $this->session->userdata("user");
        if (!$userdata ){
            if (strpos($uri, "admin") > -1){
                redirect(base_url("user/login"));
            }
        }else{
            if (strpos($uri, "login")){
                redirect(base_url("review"));
            }
        }
    }

	public function index()
	{
		$header_data = ["title"=> "Category List" ];
		$footer_data = [
			"scripts"=> [
				"review.js"
			]
		];
		$data = ["categories"=> $this->category_m->load_data() ];

		$this->load->view("front/layout/header", $header_data );
		$this->load->view("front/review", $data );
		$this->load->view("front/layout/footer", $footer_data );
	}

    public function item($id ){
		$header_data = ["title"=> "Category List" ];
		$footer_data = [
			"scripts"=> [
				"review_item.js"
			]
		];
        
        $data = [
            "trade"=> $this->trade_m->get_data($id ),
            "reviews"=> $this->review_m->reviews_by_trade($id )
        ];

		$this->load->view("front/layout/header", $header_data );
		$this->load->view("front/review_item", $data );
		$this->load->view("front/layout/footer", $footer_data );
    }

    public function load_reviews(){
        extract($this->input->post());

        $reviews = $this->review_m->load_reviews($category_id );
        $review_template = $this->load->view('front/template/reviews', compact("reviews"), TRUE );
        echo json_encode(["result"=>"success", "data"=> $review_template ]);
    }

	public function submit_rate(){
		extract($this->input->post());

		$this->review_m->insert_entry($data );
		echo json_encode(["result"=> "success"]);
	}
}
