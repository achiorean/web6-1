<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    
    function create() {
        
        $data['title'] = "CREATE ACCOUNT";
        $data['pageContent'] = "createview.php";
        $this->load->view('layout', $data);  
    }
    
}