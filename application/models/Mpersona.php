<?php /**
 *
 */
class Mpersona extends CI_Model
{

  public function Guardar($param)
  {
    $campos = array(
      'dni' => $param['dni'],
      'nombre'=> $param['nombre'],
      'appaterno' => $param['appaterno'],
      'apmaterno' => $param['apmaterno'],
      'email' => $param['email'],
      'fecnac' => $param['fecnac']
    );
    $this->db->insert('persona',$campos);
      return $this->db->insert_id();
  }

  public function actualizarDatos($param)
  {
    $campos = array(
      'nombre'=> $param['nombre'],
      'appaterno' => $param['appaterno'],
      'apmaterno' => $param['apmaterno'],
      'email' => $param['email']
    );

    $this->db->where('idPersona', $this->session->userdata('s_idPersona'));
    $this->db->update('persona', $campos);
    return true;
  }

  public function eliminarDato($idP)
  {
  $campos = array(
    'idPersona'=> $idP
  );
  $this->db->delete('persona', $campos);

  }
}
 ?>
