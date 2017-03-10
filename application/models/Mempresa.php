<?php
/**
 *
 */
class Mempresa extends  CI_Model
{
  public function Guardar($param)
  {
    $campos = array(
      'nombre' => $param['nombre'],
      'correo'=> $param['correo'],
      'direccion' => $param['direccion'],
      'telefono' => $param['telefono'],
      'codigo_postal' => $param['codigo_postal']
    );
    $this->db->insert('empresa',$campos);

  }


    public function actualizarDatos($param)
    {
      $campos = array(
        'correo'=> $param['correo'],
        'direccion' => $param['direccion'],
        'telefono' => $param['telefono'],
        'codigo_postal' => $param['codigo_postal']
      );

      $this->db->where('nombre', $param['nombre']);
      $this->db->update('empresa', $campos);
      return true;
    }

    public function eliminarDato($idE)
    {
    $campos = array(
      'nombre'=> $idE
    );
    $this->db->delete('empresa', $campos);

    }
    public function getEmpresas()
    {
    //  $s = $this->db->get_where('')
    $this->db->SELECT('id_empresa, nombre');
    $this->db->FROM('empresa');
    $s = $this->db->get();
    return $s->result();
    }
    public function getTempresas()
    {
    //  $s = $this->db->get_where('')
    $this->db->SELECT('id_empresa, nombre, correo, direccion, telefono, codigo_postal');
    $this->db->FROM('empresa');
    $s = $this->db->get();
    return $s->result();
    }

}

 ?>
