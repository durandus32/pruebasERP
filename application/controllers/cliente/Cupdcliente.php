<?php /**
 *
 */
class Cupdcliente extends CI_Controller
{
  public function index(){
    $this->load->view('layout/header');
    $this->load->view('layout/menu');
    $this->load->view('cliente/vupdcliente');
    $this->load->view('layout/footer');
  }
}
 ?>
