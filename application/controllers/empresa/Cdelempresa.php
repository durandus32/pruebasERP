<?php /**
 *
 */
class Cdelempresa extends CI_Controller
{
  public function index()
   {
       $data['mensaje'] = '';
       if($this->session->userdata('s_logeado')){
         $this->load->view('layout/header');
           $this->load->view('layout/menu');
         $this->load->view('empresa/vdelempresa');
           $this->load->view('layout/footer');
       }else {
           $this->load->view('vlogin', $data);
       }
   }
}
 ?>
