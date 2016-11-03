<?php
session_start();
require_once("../../Modelos/Usuarios/mUsuario.php");

$user = new Usuario();


$usuario = $_POST['usuario'];
$pass =  $_POST['clave'];

if(!$user->existe_Usuario($usuario)){
    echo '<script type="text/javascript">'
        . 'alert("Usuario no esta registrado en el sistema");'
        . '</script>';
   echo '<script type="text/javascript">'
        . 'document.location.href = "/Productos_BD/Vistas/Principales/GUI_Login.php";'
        . '</script>';
}else   if(!$user->usuario_Pass_Correctos($usuario, $pass)){
            echo '<script type="text/javascript">'
                . 'alert("Contrase\u00f1a Incorrecta");'
                . '</script>';
            echo '<script type="text/javascript">'
                . 'document.location.href = "/Productos_BD/Vistas/Principales/GUI_Login.php";'
                . '</script>';
        }else{
            echo '<script type="text/javascript">'
            . 'top.location="../../Vistas/Principales/GUI_Menu.php";'
            . '</script>';
}