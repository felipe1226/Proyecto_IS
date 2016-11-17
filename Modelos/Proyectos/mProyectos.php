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


    function listar_proyecto(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT *
                                            FROM proyecto
                                            WHERE estado = 'Activo';");
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
                alert("Se han modificado los datos del proyecto exitosamente!");
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

   
    
    function eliminar_Participa($codigo){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE proyecto SET  estado = 'Inactivo'
                                        WHERE codigo = ".$codigo."");
            $this->bd->desconectar();


    }

    function ListarPor($dato,$opcion){
        if($opcion == "1"){

        }
        if($opcion == "2"){

        }
        if($opcion == "3"){

        }
        if($opcion == "4"){

        }
    }


    function ListarXComunidadProyecto($codigo_comunidad){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT codigo, titulo, descripcion, alcance, presupuesto, fechai, fechaf, responsable FROM proyecto WHERE cocomunidad ='".$codigo_comunidad."' AND estado='Activo'" );
            $this->bd->desconectar();
            return $consulta;

    }

    function responsablexproyecto($codigo){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT nombre, Apellido from proyecto, aadministrativa, trabajador where codigo= '"+plan+"' and proyecto.responsable=aadministrativa.id and aadministrativa.id=trabajador.id and estado='Activo'");
            $this->bd->desconectar();
            return $consulta;
    }

    function proyectoxresponsable($id_representante){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT codigo,titulo,descripcion from proyecto where responsable='".$id_representante."'and estado='Activo' ");
            $this->bd->desconectar();
            return $consulta;
    }

    function proyectoxevaluacioninferior($valor){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT proyecto.codigo,titulo,proyecto.descripcion,objetivo.valor FROM proyecto,objetivo WHERE objetivo.coproyecto=proyecto.codigo AND valor<'".$valor."' ");
            $this->bd->desconectar();
            return $consulta;
    }

    function objetivoevaluacionxproyecto($codigo_comunidad){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT descripcion,valor FROM objetivo WHERE coproyecto='"+ plan +"' AND estado='Activo'");
            $this->bd->desconectar();
            return $consulta;
    }

    function listarxniñocomunidad($codigo_objetivo){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT * from infante where comunidad='"+ plan +"' and estado='activo'");
            $this->bd->desconectar();
            return $consulta;
    }

    function profesionalesxespecializacion($nombre_representante){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT nombre,apellido,telefono from trabajador,profesional where especializacion='"+plan+"' and profesional.id=trabajador.id ");
            $this->bd->desconectar();
            return $consulta;
    }

    function listarxfecha($fechai){
        $this->bd->conectar();
            $this->bd->set_Consulta("SELECT proyecto.codigo,titulo,proyecto.descripcion 
                                    FROM proyecto Where fechai='".$fechai."'and estado='Activo'");
            $this->bd->desconectar();
            return $consulta;
    }
}

?>