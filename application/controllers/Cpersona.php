<?php /**
 *
 */
class Cpersona extends  CI_Controller
{
function __construct(){
  parent::__construct();
  $this->load->model('Mpersona');
    $this->load->model('Musuario');
    $this->load->library('encrypt');
}
public function index(){
  $this->load->view('layout/header');
  $this->load->view('layout/menu');
  $this->load->view('persona/vpersona');
  $this->load->view('layout/footer');
}
public function guardar(){
  $param['dni'] = $this->input->post('txtDni');
  $param['nombre'] = $this->input->post('txtNombre');
  $param['appaterno'] = $this->input->post('txtApPaterno');
  $param['apmaterno'] = $this->input->post('txtApMaterno');
  $param['email'] = $this->input->post('txtEmail');
  $param['fecnac'] = $this->input->post('txtFechaNa');
  $paramUsu['nomUsuario'] = $this->input->post('txtUsuario');
  $paramUsu['clave'] = sha1($this->input->post('txtClave'));
  $lastid = $this->Mpersona->Guardar($param);
    if($lastid>0){
      $paramUsu['idPersona'] = $lastid;
      $this->Musuario->guardarUsuario($paramUsu);
    //  $this->load->view('persona/vpersona');
    }
}

public function actualizarDatos()
{
  $param['nombre'] = $this->input->post('txtNombre');
  $param['appaterno'] = $this->input->post('txtApPaterno');
  $param['apmaterno'] = $this->input->post('txtApMaterno');
  $param['email'] = $this->input->post('txtEmail');
  $this->Mpersona->actualizarDatos($param);
  redirect('Cupdpersona/cerrarSesion');
}

public function eliminarDato()
{
$idP= $this->input->post('txtIdPersona');
$this->Musuario->eliminarDato($idP);
$this->Mpersona->eliminarDato($idP);
}


}
 ?>
