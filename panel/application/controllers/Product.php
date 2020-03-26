<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {
    public $ViewFolder="";

    public function __construct()
    {
        parent::__construct();

        $this->ViewFolder="product_v";
    }

  public function index()

  {
       $viewData = new stdClass();
       $viewData->ViewFolder=$this->ViewFolder;
      $viewData->subViewFolder="list";


      $this->load->view("{$viewData->ViewFolder}/{$viewData->subViewFolder}/index",$viewData);

  }

}

?>