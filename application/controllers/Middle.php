<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Middle extends CI_Controller {
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
}
