<?php
require_once(APPPATH.'/libraries/REST_Controller.php');
class Welcome extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index_get()
    {
		$this->load->view('welcome_message');
    }
}

