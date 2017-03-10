<?php /**
 *
 */
class Cmosempresa extends CI_Controller
{
public function index()
{
  $this->load->view('layout/header');
  $this->load->view('layout/menu');
  $this->load->view('empresa/vmosempresa');
  $this->load->view('layout/footer');
}


}
 ?>
