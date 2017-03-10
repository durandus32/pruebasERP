<?php
/**
 *
 */
class Cdelpersona extends CI_Controller
{

  public function index()
   {
       $data['mensaje'] = '';
       if($this->session->userdata('s_logeado')){
         $this->load->view('layout/header');
           $this->load->view('layout/menu');
         $this->load->view('persona/vdelpersona');
           $this->load->view('layout/footer');
       }else {
           $this->load->view('vlogin', $data);
       }
   }

}

 ?>
