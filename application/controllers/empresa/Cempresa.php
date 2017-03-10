<?php /**
 *
 */
class Cempresa extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->model('Mempresa');
  }
  public function index(){
    $this->load->view('layout/header');
    $this->load->view('layout/menu');
    $this->load->view('empresa/vempresa');
    $this->load->view('layout/footer');
  }

  public function guardar()
  {
    $param['nombre'] = $this->input->post('txtNombre');
    $param['direccion'] = $this->input->post('txtDireccion');
    $param['telefono'] = $this->input->post('txtTelefono');
    $param['correo'] = $this->input->post('txtCorreo');
    $param['codigo_postal'] = $this->input->post('txtCp');
    $this->Mempresa->Guardar($param);
    redirect('empresa/Cempresa');
  }

  public function actualizarDatos()
  {
    $param['nombre'] = $this->input->post('txtNombre');
    $param['direccion'] = $this->input->post('txtDireccion');
    $param['telefono'] = $this->input->post('txtTelefono');
    $param['correo'] = $this->input->post('txtCorreo');
    $param['codigo_postal'] = $this->input->post('txtCp');
    $this->Mempresa->actualizarDatos($param);

    redirect('empresa/Cempresa');
  }


  public function eliminarDato()
  {
  $idE= $this->input->post('txtNombre');
  $this->Mempresa->eliminarDato($idE);
redirect('empresa/Cdelempresa');
  }

  public function getEmpresas()
  {
  //$s =  $this->input->post('sitReg');
  //$this->Mempresa->getEmpresas($s);
    $resultado = $this->Mempresa->getEmpresas();
    echo json_encode($resultado);
  }
  public function getTempresas()
  {
  //$s =  $this->input->post('sitReg');
  //$this->Mempresa->getEmpresas($s);
    $resultado = $this->Mempresa->getTempresas();
    echo json_encode($resultado);
  }

}
 ?>
