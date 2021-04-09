<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

    public function index()
    {
        $this->load->model("IMG_MODEL");
        $data=$this->IMG_MODEL->Alldata();
        $Alldata['data']=$data;
        $this->load->view('Galery',$Alldata);    
        // var_dump($data);
    }
        public function Admin()
    {
        $this->load->model("IMG_MODEL");
        $data=$this->IMG_MODEL->Alldata();
        $Alldata['data']=$data;
        $this->load->view('Admin',$Alldata);    
        // var_dump($data);
    }
    public function Add()
    {
        if (empty($_POST)) {
            $this->load->model("IMG_MODEL");
            $data=$this->IMG_MODEL->Alldata();
            $Alldata['data']=$data;
            $this->load->view("Add",$Alldata);
        }else{
        $this->load->model("IMG_MODEL");
        $data=$this->IMG_MODEL->CreadData($_POST);
        redirect("/Galery/Admin");
        }
    }
    public function Update()
    {
        $this->load->model("IMG_MODEL");
        $data=$this->IMG_MODEL->UpdateData($_POST);
        redirect("/Galery/Admin");
    }
    public function Delete()
    {
        $this->load->model("IMG_MODEL");
        $data=$this->IMG_MODEL->DeleteData($_GET['id']);
        redirect("/Galery/Admin");
    }
}
