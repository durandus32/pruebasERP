<?php /**
 *
 */
class Ccliente extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('Mcliente');
  }
  public function index(){
    $this->load->view('layout/header');
    $this->load->view('layout/menu');
    $this->load->view('cliente/vcliente');
    $this->load->view('layout/footer');
  }

  public function guardar()
  {
    $param['nombre'] = $this->input->post('txtNombre');
    $param['id_empresa'] = $this->input->post('txtEmpresa');
    $param['sexo'] = $this->input->post('txtSexo');
    $param['puesto'] = $this->input->post('txtPuesto');
    $param['departameto'] = $this->input->post('txtDepartamento');
    $param['telefono1'] = $this->input->post('txtTelefono');
    $param['telefono2'] = $this->input->post('txtTelefono2');
    $param['tel_cel'] = $this->input->post('txtTelCel');
    $param['email'] = $this->input->post('txtCorreo');
    $this->Mcliente->Guardar($param);
    redirect('cliente/Ccliente');

  }

  public function actualizarDatos()
  {
    $param['nombre'] = $this->input->post('txtNombre');
    $param['id_empresa'] = $this->input->post('txtEmpresa');
    $param['sexo'] = $this->input->post('txtSexo');
    $param['puesto'] = $this->input->post('txtPuesto');
    $param['departameto'] = $this->input->post('txtDepartamento');
    $param['telefono1'] = $this->input->post('txtTelefono');
    $param['telefono2'] = $this->input->post('txtTelefono2');
    $param['tel_cel'] = $this->input->post('txtTelCel');
    $param['email'] = $this->input->post('txtCorreo');
    $this->Mcliente->actualizarDatos($param);

    redirect('cliente/Cupdecliente');
  }


  public function eliminarDato()
  {
  $idC= $this->input->post('txtIdCliente');
  $this->Mcliente->eliminarDato($idC);
  redirect('cliente/Cdelcliente');
  }
}
 ?>
