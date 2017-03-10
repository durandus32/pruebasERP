<?php /**
 *
 */
class Mcliente extends CI_Model
{
  public function Guardar($param)
  {
    $campos = array(
      'nombre' => $param['nombre'],
      'id_empresa'=> $param['id_empresa'],
      'sexo' => $param['sexo'],
      'puesto' => $param['puesto'],
      'departamento' => $param['departameto'],
      'telefono1' => $param['telefono1'],
      'telefono2' => $param['telefono2'],
      'tel_cel' => $param['tel_cel'],
      'email' => $param['email']
    );
    $this->db->insert('cliente',$campos);


  }


    public function actualizarDatos($param)
    {
      $campos = array(
        'nombre' => $param['nombre'],
        'id_empresa'=> $param['id_empresa'],
        'sexo' => $param['sexo'],
        'puesto' => $param['puesto'],
        'departamento' => $param['departameto'],
        'telefono1' => $param['telefono1'],
        'telefono2' => $param['telefono2'],
        'tel_cel' => $param['tel_cel'],
        'email' => $param['email']
      );
      $this->db->insert('cliente',$campos);

      $this->db->where('nombre', $param['nombre']);
      $this->db->update('cliente', $campos);
      return true;
    }

    public function eliminarDato($idC)
    {
    $campos = array(
      'nombre'=> $idC
    );
    $this->db->delete('cliente', $campos);

    }

}
 ?>
