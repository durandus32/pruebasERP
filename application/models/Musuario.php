<?php
/**
 *
 */
class Musuario extends CI_Model
{
public function guardarUsuario($paramUsu)
{
  $campos = array(
    'nomUsuario' => $paramUsu['nomUsuario'],
    'clave' => $paramUsu['clave'],
    'idPersona' => $paramUsu['idPersona']
   );
   $this->db->insert('usuario', $campos);
}
public function eliminarDato($idP)
{
  $this->db->where('idPersona', $idP);
  $this->db->delete('usuario');
}

}

 ?>
