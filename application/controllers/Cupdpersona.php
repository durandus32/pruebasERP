<?php
/**
 *
 */
class Cupdpersona extends CI_Controller
{

  public function index()
   {
       $data['mensaje'] = '';
       if($this->session->userdata('s_logeado')){
         $this->load->view('layout/header');
           $this->load->view('layout/menu');
         $this->load->view('persona/vupdpersona');
           $this->load->view('layout/footer');
       }else {
           $this->load->view('vlogin', $data);
       }
   }

  public function cerrarSesion()
  {
    $s_usuario = array(
      's_logeado' => false
    );
    $data['mensaje'] = '';
    $this->session->set_userdata($s_usuario);
    $this->load->view('vlogin' , $data);

  }

}

 ?>
