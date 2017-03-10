<?php
/**
 *
 */
class Mlogin extends CI_Model
{
  public function ingresar($usu, $pass)
  {
    $this->db->SELECT('u.idUsuario, p.idPersona, p.nombre, p.appaterno, p.apmaterno');
    $this->db->FROM('usuario u');
    $this->db->JOIN('persona p ','p.idPersona = u.idPersona');
    $this->db->WHERE('u.nomUsuario = ',$usu);
    $this->db->WHERE('u.clave = ',$pass);

    $resultado = $this->db->get();
    if ($resultado->num_rows() == 1) {
        $r = $resultado->row();
    $s_usuario = array(
      's_idPersona' => $r->idPersona,
      's_idUsuario' => $r->idUsuario,
      's_usuario' => $r->nombre . ", " . $r->appaterno . " " . $r->apmaterno,
      's_logeado' => true

    );
    $this->session->set_userdata($s_usuario);
    return true;
    }else{
      return false;
    }

  }
}

 ?>
