<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('include/header');
        $this->load->view('company_services');
        $this->load->view('include/footer');
    }

}