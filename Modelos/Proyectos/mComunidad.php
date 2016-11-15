<?php 
require_once("../../Controladores/BaseDatos/cConexionBD.php");

class Comunidad
{

private $bd;

 function Comunidad(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

    function Registrar_Comunidad($codigo_comunidad, $etnia, $nombre_comunidad, $poblacion, $id_representante){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO comunidad(codigo,etnia,nombre,poblacion, representante, estado)
                                            VALUES( 
                                                    '".$codigo_comunidad."',
                                                    '".$etnia."',
                                                    '".$nombre_comunidad."',
                                                    '".$poblacion."',
                                                    '".$id_representante."',
                                                    'Activo');");
            $this->bd->desconectar();
    }

    function listar_comunidad(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT *
                                            FROM comunidad
                                            WHERE estado = 'Activo';");
        $this->bd->desconectar();
        return $consulta;
    }
    

    function consultar_comunidad($codigo){

        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT codigo,etnia,nombre,poblacion,representante
                                                FROM comunidad
                                                WHERE estado = 'Activo' AND codigo = '".$codigo."'");
        $this->bd->desconectar();
        
        return $consulta;
    }

    function actualizar_comunidad($codigo, $etnia, $nombre, $poblacion, $representante){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE comunidad SET  etnia = '".$etnia."',
                                                                nombre = '".$nombre."',
                                                                poblacion = '".$poblacion."',
                                                                representante = '".$representante."'
                                        WHERE codigo = ".$codigo."");
            $this->bd->desconectar();

        echo'  <script>
                alert("Se han modificado los datos de la comunidad exitosamente!");
                top.location.href="/Proyecto_IS/Vistas/Front/front.php";
                </script>';
    }


    function eliminar_Comunidad($codigo){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE comunidad SET  estado = 'Inactivo'
                                        WHERE codigo = ".$codigo."");
            $this->bd->desconectar();

      
    }





}
?>
