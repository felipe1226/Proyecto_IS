<?php 
require_once("../../Controladores/BaseDatos/cConexionBD.php");

class Tema
{

private $bd;

 function Tema(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }


    function Registrar_Tema($codigo_tema, $descripcion_tema){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO tema(codigo,descripcion,estado)
                                            VALUES( 
                                                    '".$codigo_tema."',
                                                    '".$descripcion_tema."',
                                                    'Activo');");
            $this->bd->desconectar();
    }

    function consultar_tema($codigo){

        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT codigo,descripcion
                                                FROM tema
                                                WHERE estado = 'Activo' AND codigo = '".$codigo."'");
        $this->bd->desconectar();
        
        return $consulta;
    }

    function actualizar_tema($codigo, $descripcion){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE tema SET  descripcion = '".$descripcion."'
                                        WHERE codigo = ".$codigo."");
            $this->bd->desconectar();

        echo'  <script>
                alert("Se han modificado los datos del tema exitosamente!");
                top.location.href="/Proyecto_IS/Vistas/Front/front.php";
                </script>';
    }


    function eliminar_Tema($codigo){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE tema SET  estado = 'Inactivo'
                                        WHERE codigo = ".$codigo."");
            $this->bd->desconectar();

      
    }


}
?>