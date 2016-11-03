<?php 
require_once("../../Controladores/BaseDatos/cConexionBD.php");

class Usuario{

private $bd;

    function Usuario(){
        $this->bd = new ConexionPostgres();
    }
    
    public function datos(){
        $datos = $this->bd->get_Consulta();
        return $datos;
    }

    function existe_Usuario($usuario){
        $existe = false;
        $this->bd->conectar();
        $this->bd->set_Consulta("SELECT usuario
                                    FROM usuarios
                                    WHERE usuario = '".$usuario."'");
        if($tupla = $this->bd->get_Consulta()){
            $existe = true;
        }
        $this->bd->desconectar();
        return $existe;
    }


    function usuario_Pass_Correctos($usuario,$pass){
        $correcto = false;
        $this->bd->conectar();
        $this->bd->set_Consulta("SELECT clave
                                    FROM usuarios
                                    WHERE usuario = '".$usuario."'");
        if($tupla = $this->bd->get_Consulta()){
            if($tupla[0] == $pass){
                $correcto = true;
            }
        }
        $this->bd->desconectar();
        return $correcto;
    }

}

?>