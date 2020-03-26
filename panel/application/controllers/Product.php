<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {
    public $ViewFolder="";

    public function __construct()
    {
        parent::__construct();

        $this->ViewFolder="product_v";

        $this->load->model("product_model");
    }

  public function index()

  {
       $viewData = new stdClass();
      $items = $this->product_model->get_all();
       $viewData->ViewFolder=$this->ViewFolder;
      $viewData->subViewFolder="list";
      $viewData->items=$items;


      $this->load->view("{$viewData->ViewFolder}/{$viewData->subViewFolder}/index",$viewData);

  }

}

?>