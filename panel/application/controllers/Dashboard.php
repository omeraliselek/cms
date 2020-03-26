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
        $viewData = new stdClass();
        $viewData->ViewFolder=$this->ViewFolder;
        $viewData->subViewFolder="list";


        $this->load->view("{$this->ViewFolder}/{$viewData->subViewFolder}/index",$viewData);
	}
}
