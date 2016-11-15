<?php 
require_once("../../Controladores/BaseDatos/cConexionBD.php");

class Objetivo
{

private $bd;

 function Objetivo(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

    function Registrar_Objetivo($codigo_objetivo, $descripcion_objetivo, $clasificacion, $codigo){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO objetivo(codigo,descripcion,valor,coproyecto, estado)
                                            VALUES( 
                                                    '".$codigo_objetivo."',
                                                    '".$descripcion_objetivo."',
                                                    '".$clasificacion."',
                                                    '".$codigo."',
                                                    'Activo');");
            $this->bd->desconectar();
    }

    function listar_objetivos(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT *
                                            FROM objetivo
                                            WHERE estado = 'Activo';");
        $this->bd->desconectar();
        return $consulta;
    }
    

    function consultar_objetivo($codigo){

        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT codigo,descripcion,valor,coproyecto
                                                FROM objetivo
                                                WHERE estado = 'Activo' AND codigo = '".$codigo."'");
        $this->bd->desconectar();
        
        return $consulta;
    }

    function actualizar_objetivo($codigo, $descripcion, $valor){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE objetivo SET  descripcion = '".$descripcion."',
                                                                valor = '".$valor."'
                                        WHERE codigo = ".$codigo."");
            $this->bd->desconectar();

        echo'  <script>
                alert("Se han modificado los datos del objetivo exitosamente!");
                top.location.href="/Proyecto_IS/Vistas/Front/front.php";
                </script>';
    }


    function eliminar_Objetivo_($codigo){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE objetivo SET  estado = 'Inactivo'
                                        WHERE codigo = ".$codigo."");
            $this->bd->desconectar();

      
    }
}
?>