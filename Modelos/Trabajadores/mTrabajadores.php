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

    function Registrar_Trabajador($id, $nombre, $apellido, $telefono, $salario, $fecha_nac){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO trabajador(id,nombre,apellido,telefono,fechanato, salario,estado)
                                            VALUES( 
                                                    '".$id."',
                                                    '".$nombre."',
                                                    '".$apellido."',
                                                    '".$telefono."',
                                                    '".$fecha_nac."',
                                                    '".$salario."',
                                                    'Activo');");
            $this->bd->desconectar();
             echo'<script>
                    alert("Trabajador registrado exitosamente");
                    top.location.href="/Proyecto_IS/Vistas/Front/front.php";
                     </script>';
        
    }

    function Registrar_Profesional($id, $select1){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO profesional(id,tipop,estado)
                                            VALUES( 
                                                    '".$id."',
                                                    '".$select1."',
                                                    'Activo');");
            $this->bd->desconectar();
           
        
    }

    function Registrar_Administrativa($id, $select2){

            $this->bd->conectar();
            $this->bd->set_Consulta("INSERT INTO aadministrador(id,tipoa,estado)
                                            VALUES( 
                                                    '".$id."',
                                                    '".$select2."',
                                                    'Activo');");
            $this->bd->desconectar();
          
    }

     function listar_trabajador(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT *
                                            FROM trabajador
                                            WHERE estado = 'Activo'");
        $this->bd->desconectar();
        return $consulta;
    }


    


    function Cargar_Trabajador(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT id
                                            FROM trabajador;");
        $this->bd->desconectar();
        return $consulta;
    }

    function Cargar_Administrativo(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT id
                                            FROM aadministrador 
                                            WHERE estado = 'Activo'");
        $this->bd->desconectar();
        return $consulta;
    }

    function Cargar_Profesional(){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("SELECT id
                                            FROM profesional
                                            WHERE estado = 'Activo'");
        $this->bd->desconectar();
        return $consulta;
    }
    

    function consultar_trabajador($ID){

            $this->bd->conectar();
            $consulta = $this->bd->set_Consulta("SELECT id,nombre,apellido,telefono, fechanato, salario
                                                FROM trabajador
                                                WHERE estado = 'Activo' AND id = '".$ID."'");
            $this->bd->desconectar();
        
        
        return $consulta;
    }

    function consultar_administrativo($ID){

            $this->bd->conectar();
            $consulta = $this->bd->set_Consulta("SELECT tipoa
                                                FROM aadministrador
                                                WHERE id = '".$ID."'");
            $this->bd->desconectar();
        
        
        return $consulta;
    }


     function consultar_profesional($ID){

            $this->bd->conectar();
            $consulta = $this->bd->set_Consulta("SELECT tipop
                                                FROM profesional
                                                WHERE id = '".$ID."'");
            $this->bd->desconectar();
        
        
        return $consulta;
    }



    function actualizar_trabajador($id, $nombre, $apellido, $telefono, $fecha_nac, $salario){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE trabajador SET  nombre = '".$nombre."',
                                                            apellido = '".$apellido."',
                                                            telefono = '".$telefono."',
                                                            fechanato = '".$fecha_nac."',
                                                            salario = '".$salario."' 
                                                WHERE id=".$id."");
            $this->bd->desconectar();

        echo'  <script>
                alert("Se han modificado los datos del trabajador exitosamente!");
                top.location.href="/Proyecto_IS/Vistas/Front/Front.php";
                </script>';
    }


     function eliminar_trabajador($id){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE trabajador SET  estado = 'Inactivo'
                                                WHERE id =".$id."");
            $this->bd->desconectar();

        echo'  <script>
                alert("Se ha dado de baja al trabajador exitosamente!");
                top.location.href="/Proyecto_IS/Vistas/Front/Front.php";
                </script>';
    }

    function eliminar_administrativo($id){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE aadministrador SET  estado = 'Inactivo'
                                                WHERE id =".$id."");
            $this->bd->desconectar();

    }

    function eliminar_profesional($id){
        $this->bd->conectar();
            $this->bd->set_Consulta("UPDATE profesional SET  estado = 'Inactivo'
                                                WHERE id =".$id."");
            $this->bd->desconectar();

    }

   /* function eliminar_trabajador($id){
        $this->bd->conectar();
        $consulta = $this->bd->set_Consulta("DELETE  FROM trabajador
                                                WHERE id = ".$id.";");
        $this->bd->desconectar();
         echo'  <script>
                alert("Se ha dado de baja al trabajador exitosamente!");
                top.location.href="/Productos_BD/Vistas/Principales/GUI_Menu.php";
                </script>';
    }*/

}

?>