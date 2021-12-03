<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

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
		$header_data = [
            "title"=> "Category List"
        ];

		$side_data = [
            "title"=> "Category List"
        ];

		$footer_data = [
			"scripts"=> [
				"category.js"
			]
		];

		$data = [
			"categories"=> $this->category_m->load_data()
		];

		$this->load->view("admin/layout/header", $header_data );
		$this->load->view("admin/layout/sidebar", $side_data );
		$this->load->view("admin/category", $data);
		$this->load->view("admin/layout/footer", $footer_data );
	}

	public function save_category(){
		extract($this->input->post());

		if ($category_id == "-1" ){
			$this->category_m->insert_entry(["cat_name"=> $category_name ]);
		}else{
			$this->category_m->update_entry(["cat_name"=> $category_name], $category_id );
		}
		echo json_encode(["result"=> "success" ]);
	}

	public function delete_category(){
		extract($this->input->post());

		$this->category_m->delete_entry($category_id );
		echo json_encode(["result"=> "success"]);
	}
}
