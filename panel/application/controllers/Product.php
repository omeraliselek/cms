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

  public function new_form()
  {
      $viewData = new stdClass();
      $viewData->ViewFolder=$this->ViewFolder;
      $viewData->subViewFolder="add";
      $this->load->view("{$viewData->ViewFolder}/{$viewData->subViewFolder}/index",$viewData);
  }

  public function save()
  {
      $this->load->library("form_validation");
      $this->form_validation->set_rules("title","Başlık","required|trim");
      $this->form_validation->set_message(
          array(
              "required"=> "<b>{field}</b> alanı doldurulmalıdır."

          )

      );

      $validate = $this->form_validation->run();

      if($validate){

          $insert = $this->product_model->add(
              array(

                  "title"       => $this->input->post("title"),
                  "description" => $this->input->post("description"),
                  "url" => "test",
                  "isActive" => 1,
                  "createdAt" => date("y-m-d H:İ:S")

              )

          );

          if ($insert)
          {
   echo "Kayıt işlemi başarılıdır";

          }

          else
              {
echo "Kayıt işlemi başarılı değildur ha";

              }

      }

      else{

          $viewData = new stdClass();

          $viewData->ViewFolder=$this->ViewFolder;
          $viewData->subViewFolder="add";
          $viewData->form_error=true;
          $this->load->view("{$viewData->ViewFolder}/{$viewData->subViewFolder}/index",$viewData);

      }


  }

}

?>