<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_story extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('include/header');
        $this->load->view('our_story');
        $this->load->view('include/footer');
    }

}