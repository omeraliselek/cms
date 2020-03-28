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
                  "url" => convertToSEO($this->input->post("title")),
                  "isActive" => 1,
                  "createdAt" => date("y-m-d H:İ:S")

              )

          );

          if ($insert)
          {
  redirect(base_url("product"));

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

  public function update_form($id)
  {
      $viewData = new stdClass();
      $item = $this->product_model->get(
          array(

              "id" => $id,
          )

      );
      $viewData->ViewFolder=$this->ViewFolder;
      $viewData->subViewFolder="update";
      $viewData->item=$item;
      $this->load->view("{$viewData->ViewFolder}/{$viewData->subViewFolder}/index",$viewData);

  }

  public function update($id)
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

            $update = $this->product_model->update(
                array(

                  "id"=>$id

                ),
                array(

                    "title"       => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "url" => convertToSEO($this->input->post("title")),


                )

            );

            if ($update)
            {
                redirect(base_url("product"));

            }

            else
            {
                echo "Kayıt işlemi başarılı değildur ha";

            }

        }

        else{

            $viewData = new stdClass();

            $item = $this->product_model->get(
                array(

                    "id" => $id,
                )

            );

            $viewData->ViewFolder=$this->ViewFolder;
            $viewData->subViewFolder="update";
            $viewData->form_error=true;
            $viewData->item = $item;
            $this->load->view("{$viewData->ViewFolder}/{$viewData->subViewFolder}/index",$viewData);

        }



    }

  public function delete($id)

  {

    $delete =$this->product_model->delete(

        array(

            "id" =>$id,
        )

    );
/* alert sistem eklenecek */
    if($delete)
    {
    redirect(base_url("product"));
    }

    else{

        redirect(base_url("product"));
  }

  }

}

?>