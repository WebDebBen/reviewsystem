<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/Middle.php";
class User extends Middle {

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
	}

	public function login()
	{
		$this->load->view('login');
	}

    public function register(){
        $this->load->view('register');
    }

    public function login_request(){
        extract($this->input->post());
        
        if ($this->suser_m->get_user($useremail, $password)){
            $this->session->set_userdata("user", $this->suser_m->get_user($useremail, $password )[0]);
            echo json_encode(["result"=>"success"]);
        }else{
            echo json_encode(["result"=> "error"]);
        }
    }

	public function logout(){
		$this->session->unset_userdata("user");
		header("Location: /user/login");
	}

	public function register_request(){
		extract($this->input->post());

		$config['upload_path']          = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		$status = "success";
		if ( ! $this->upload->do_upload('photo')){
			$status = "file";
			$this->session->set_flashdata("status", $status );
			header("Location: /user/register");
		}else{
			$imageDetailArray = $this->upload->data();
			$photo =  $imageDetailArray['file_name'];
			$this->suser_m->add_user(["name"=> $name, "password"=> md5($password), "useremail"=> $email, "photo"=> $photo ]);
			header("Location: /user/login");
		}
	}
}
