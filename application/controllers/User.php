<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

	public function login()
	{
		$this->load->view('login');
	}

    public function login_request(){
        extract($this->input->post());
        
        if ($this->suser_m->get_user($useremail, $password)){
            $this->session->set_userdata("user", $this->suser_m->get_user($useremail, $password ));
            echo json_encode(["result"=>"success"]);
        }else{
            echo json_encode(["result"=> "error"]);
        }
    }

    public function logout(){
        $this->session->unset_userdata("user");
        redirect("/review");
    }

    public function register(){
        $this->load->view('register');
    }
}
