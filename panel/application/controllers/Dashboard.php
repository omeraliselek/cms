<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

     public $ViewFolder="";

     public function __construct()
     {
         parent::__construct();


         $this->ViewFolder="dashboard_v";
     }

    public function index()
	{
		$this->load->view("{$this->ViewFolder}/index");
	}
}
