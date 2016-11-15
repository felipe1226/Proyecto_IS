<?php 
require_once("../../Controladores/BaseDatos/cConexionBD.php");

class Infante
{

private $bd;

 function Infante(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

    function Registrar_Infante($id_infante, $nombre_infante, $apellido_infante, $nac_infante, $codigo_comunidad){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO infante(id,nombre,apellido, fnato, comunidad, estado)
                                            VALUES( 
                                                    '".$id_infante."',
                                                    '".$nombre_infante."',
                                                    '".$apellido_infante."',
                                                    '".$nac_infante."',
                                                    '".$codigo_comunidad."',
                                                    'Activo');");
            $this->bd->desconectar();
    }

    function listar_infantes(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT *
                                            FROM infante
                                            WHERE estado = 'Activo';");
        $this->bd->desconectar();
        return $consulta;
    }


    function consultar_infante($id){

        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT id,nombre,apellido,fnato,comunidad
                                                FROM infante
                                                WHERE estado = 'Activo' AND id = '".$id."'");
        $this->bd->desconectar();
        
        return $consulta;
    }

    function actualizar_infante($id, $nombre, $apellido,$fnato){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE infante SET  nombre = '".$nombre."',
                                                                apellido = '".$apellido."',
                                                                fnato = '".$fnato."'
                                        WHERE id = ".$id."");
            $this->bd->desconectar();

        echo'  <script>
                alert("Se han modificado los datos del infante exitosamente!");
                top.location.href="/Proyecto_IS/Vistas/Front/front.php";
                </script>';
    }


    function eliminar_Infante($id){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE infante SET  estado = 'Inactivo'
                                        WHERE id = ".$id."");
            $this->bd->desconectar();

    }



}
?>