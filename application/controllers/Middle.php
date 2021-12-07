<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Middle extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        $uri = uri_string();
        
        $userdata = $this->session->userdata("user");
        if (!$userdata ){
            if (strpos($uri, "admin") > -1){
                header("Location: /user/login");
            }
        }else{
            if (strpos($uri, "login")){
                header("Location: /review");
            }

            if (strpos($uri, "admin") > -1 ){
                if ($userdata->role != 1 ){
                    header("Location: /review");
                }
            }
        }
    }
}
