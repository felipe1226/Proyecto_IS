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

    function Registrar_Proyecto($codigo, $titulo, $descripcion, $alcance, $presupuesto, $fecha_inicio, $fecha_final, $responsable, $codigo_comunidad ,$codigo_tema){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO proyecto(codigo,titulo,descripcion,alcance,presupuesto, fechai, fechaf, responsable, cocomunidad, cotema, estado)
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
                                                    'Activo');");
            $this->bd->desconectar();
             echo'<script>
                    alert("El proyecto de ha creado exitosamente");
                    top.location.href="/Proyecto_IS/Vistas/Front/front.php";
                     </script>';
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

    function Registrar_Participa($codigo, $tiempo, $tarea, $Profesional){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO participa(proyecto,tiempo,tarea,trabajador)
                                            VALUES( 
                                                    '".$codigo."',
                                                    '".$tiempo."',
                                                    '".$tarea."',
                                                    '".$Profesional."';");
            $this->bd->desconectar();
    }

  function cargar_Proyectos(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT id_codigo,codigo,nombre,cantidad,unidad_medida
                                            FROM productos;");
        $this->bd->desconectar();
        return $consulta;
    }
    

    function consultar_proyecto($codigo){

        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT codigo,titulo,descripcion,alcance,presupuesto, fechai, fechaf, responsable, cocomunidad, cotema
                                                FROM proyecto
                                                WHERE estado = 'Activo' AND codigo = '".$codigo."'");
        $this->bd->desconectar();
        
        return $consulta;
    }

    function actualizar_Proyecto($codigo, $titulo, $descripcion, $alcance, $presupuesto, $fechai, $fechaf, $responsable){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE proyecto SET  titulo = '".$titulo."',
                                                                descripcion = '".$descripcion."',
                                                                alcance = '".$alcance."',
                                                                presupuesto = '".$presupuesto."',
                                                                fechai = '".$fechai."',
                                                                fechaf = '".$fechaf."',
                                                                responsable = '".$responsable."'
                                        WHERE codigo = ".$codigo."");
            $this->bd->desconectar();

        echo'  <script>
                alert("Actualizacion de Producto Exitosa!");
                top.location.href="/Proyecto_IS/Vistas/Front/front.php";
                </script>';
    }

    function eliminar_Proyecto($codigo){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE proyecto SET  estado = 'Inactivo'
                                        WHERE codigo = ".$codigo."");
            $this->bd->desconectar();

        echo'  <script>
                alert("Se ha eliminado el proyecto exitosamente!");
                top.location.href="/Pryecto_IS/Vistas/Front/front.php";
                </script>';
    }
    function ListarXComunidadProyecto($codigo_comunidad){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT CODIGO, TITULO, DESCRIPCION, ALCANCE, PRESUPUESTO, FECHAI, FECHAF, RESPONSABLE from proyecto where COCOMUNIDAD = '"+ plan +"'and estado='activo'" );
            $this->bd->desconectar();
            return $consulta;

    }
    function responsablexproyecto($codigo){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT nombre,Apellido from proyecto, aadministrativa, trabajador where codigo= '"+plan+"' and proyecto.responsable=aadministrativa.id and aadministrativa.id=trabajador.id and estado='activo'");
            $this->bd->desconectar();
            return $consulta;
    }
    function proyectoxresponsable($id_representante){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT codigo,titulo,descripcion from proyecto where responsable='"+ plan +"'and estado='activo' ");
            $this->bd->desconectar();
            return $consulta;
    }

    /*function eliminar_Proyecto($id){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("DELETE  FROM productos
                                                WHERE id_codigo = ".$id.";");
        $this->bd->desconectar();
         echo'  <script>
                alert("Eliminacion de Producto Exitosa!");
                top.location.href="/Productos_BD/Vistas/Principales/GUI_Menu.php";
                </script>';
    }*/

}

?>