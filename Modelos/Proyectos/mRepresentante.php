<?php 
require_once("../../Controladores/BaseDatos/cConexionBD.php");

class Representante
{

private $bd;

 function Representante(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

    function Registrar_Representante($id_representante, $nombre_representante, $apellido_representante, $nac_representante, $cel_representante , $ciudad_representante , $dir_representante){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO representante(id,nombre,apellido,fnato, celular, ciudad, direccion,estado)
                                            VALUES( 
                                                    '".$id_representante."',
                                                    '".$nombre_representante."',
                                                    '".$apellido_representante."',
                                                    '".$nac_representante."',
                                                    '".$cel_representante."',
                                                    '".$ciudad_representante."',
                                                    '".$dir_representante."',
                                                    'Activo');");
            $this->bd->desconectar();
    }

    function listar_representante(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT *
                                            FROM representante
                                            WHERE estado = 'Activo';");
        $this->bd->desconectar();
        return $consulta;
    }
    

    function consultar_representante($id){

        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT id,nombre,apellido,fnato,celular, ciudad, fechaf, direccion
                                                FROM comunidad
                                                WHERE estado = 'Activo' AND id = '".$id."'");
        $this->bd->desconectar();
        
        return $consulta;
    }

    function eliminar_representante($id){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE representante SET  estado = 'Inactivo'
                                        WHERE id = (SELECT representante 
                                                    FROM comunidad 
                                                    WHERE codigo = ".$id.")");
            $this->bd->desconectar();

    }


    function eliminar_representante_proyecto($com){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE representante SET  estado = 'Inactivo'
                                        WHERE id = (SELECT representante 
                                                    FROM comunidad 
                                                    WHERE codigo = ".$com.")");
            $this->bd->desconectar();

    }

}
?>