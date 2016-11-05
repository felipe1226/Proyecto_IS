<?php 
require_once("../../Controladores/BaseDatos/cConexionBD.php");

class Proyecto
{

private $bd;

 function Proyecto(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

    function Registrar_Proyecto($codigo, $titulo, $descripcion, $alcance, , $presupuesto , $fecha_inicio , $fecha_final , $responsable , $codigo_comunidad , $codigo_tema ){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO proyecto(codigo,titulo,descripcion,alcance, presupuesto, fechai, fechaf, responsable, cocomunidad, cotema,estado)
                                            VALUES( 
                                                    '".$codigo."',
                                                    '".$titulo."',
                                                    '".$descripcion."',
                                                    '".$alcance."',
                                                    '".$presupuesto."',
                                                    '".$fecha_inicio."',
                                                    '".$fecha_final."',
                                                    '".$responsable."',
                                                    '".$codigo_comunidad."',
                                                    '".$codigo_tema."',
                                                    'Activo',);");
            $this->bd->desconectar();
             echo'<script>
                    alert("El proyecto de ha creado satisfactoriamente");
                    top.location.href="/Proyecto_IS/Vistas/Front/front.php";
                     </script>';
    }

    function Registrar_Tema($codigo_tema, $descripcion_tema){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO tema(codigo,descripcion,estado)
                                            VALUES( 
                                                    '".$codigo_tema."',
                                                    '".$descripcion_tema."',
                                                    'Activo',);");
            $this->bd->desconectar();
    }
    
    function Registrar_Objetivo($codigo_objetivo, $descripcion_objetivo, $clasificacion, $codigo){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO objetivo(codigo,descripcion,valor,coproyecto, estado)
                                            VALUES( 
                                                    '".$codigo_objetivo."',
                                                    '".$descripcion_objetivo."',
                                                    '".$clasificacion."',
                                                    '".$codigo."',
                                                    'Activo',);");
            $this->bd->desconectar();
        
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
                                                    'Activo',);");
            $this->bd->desconectar();
    }

    function Registrar_Representante($id_representante, $nombre_representante, $apellido_representante, $nac_representante, , $cel_representante , $ciudad_representante , $dir_representante){

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
                                                    'Activo',);");
            $this->bd->desconectar();
    }

    function Registrar_Infante($id_infante, $nombre_infante, $apellido_infante, $nac_infante, , $codigo_comunidad){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO infante(id,nombre,apellido, fnato, comunidad, estado)
                                            VALUES( 
                                                    '".$id_infante."',
                                                    '".$nombre_infante."',
                                                    '".$apellido_infante."',
                                                    '".$nac_infante."',
                                                    '".$codigo_comunidad."',
                                                    'Activo',);");
            $this->bd->desconectar();
    }

    function Registrar_Participan($codigo, $tiempo, $tarea, $Profesional){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO participa(proyecto,tiempo,tarea,trabajador, estado)
                                            VALUES( 
                                                    '".$codigo."',
                                                    '".$tiempo."',
                                                    '".$tarea."',
                                                    '".$Profesional."',
                                                    'Activo',);");
            $this->bd->desconectar();
    }

  function cargar_Proyectos(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT id_codigo,codigo,nombre,cantidad,unidad_medida
                                            FROM productos;");
        $this->bd->desconectar();
        return $consulta;
    }
    

    function consultar_Proyecto($rdato, $dato){

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

     function actualizar_Proyecto($id, $codigo, $nombre, $cantidad, $medida){
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

    function eliminar_Proyecto($id){
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