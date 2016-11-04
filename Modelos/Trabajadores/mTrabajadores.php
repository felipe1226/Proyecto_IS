<?php 
require_once("../../Controladores/BaseDatos/cConexionBD.php");

class Trabajador
{

private $bd;

 function Trabajador(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

    function Crear_Trabajador($codigo, $nombre, $cantidad, $medida){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO productos(codigo,nombre,cantidad,unidad_medida)
                                            VALUES( 
                                                    '".$codigo."',
                                                    '".$nombre."',
                                                    '".$cantidad."',
                                                    '".$medida."');");
            $this->bd->desconectar();
             echo'<script>
                    alert("Creacion de producto Satisfactorio");
                    top.location.href="/Productos_BD/Vistas/Principales/GUI_Menu.php";
                     </script>';
        
    }

  function cargar_trabajador(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT id_codigo,codigo,nombre,cantidad,unidad_medida
                                            FROM productos;");
        $this->bd->desconectar();
        return $consulta;
    }
    

    function consultar_trabajador($rdato, $dato){

        if($rdato== "codigo"){
            $this->bd->conectar();
            $consulta = $this->bd->set_Consulta("SELECT id_codigo,codigo,nombre,cantidad,unidad_medida
                                                FROM productos
                                                WHERE codigo = '".$dato."'");
            $this->bd->desconectar();
        }
        else{
            $this->bd->conectar();
            $consulta = $this->bd->set_Consulta("SELECT id_codigo,codigo,nombre,cantidad,unidad_medida
                                                FROM productos
                                                WHERE nombre = '".$dato."'");
            $this->bd->desconectar();
        }
        return $consulta;
    }

     function actualizar_trabajador($id, $codigo, $nombre, $cantidad, $medida){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE productos SET  codigo = '".$codigo."',
                                                                nombre = '".$nombre."',
                                                                cantidad = '".$cantidad."',
                                                                unidad_medida = '".$medida."'
                                        WHERE id_codigo = ".$id."");
            $this->bd->desconectar();

        echo'  <script>
                alert("Actualizacion de Producto Exitosa!");
                top.location.href="/Productos_BD/Vistas/Principales/GUI_Menu.php";
                </script>';
    }

    function eliminar_trabajador($id){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("DELETE  FROM productos
                                                WHERE id_codigo = ".$id.";");
        $this->bd->desconectar();
         echo'  <script>
                alert("Eliminacion de Producto Exitosa!");
                top.location.href="/Productos_BD/Vistas/Principales/GUI_Menu.php";
                </script>';
    }

}

?>