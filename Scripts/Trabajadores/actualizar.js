document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")

function validar_actualizacion(){
    
            if($("#nombre").val() === ""){
               $("#nombre").focus();
                alerts("El nombres obligatorio para el registro del proyecto", "Campo Vacio");
            }
            else{
                if($("#apellido").val() === ""){
                $("#apellido").focus();
                alerts("El apellido es obligatorio para el registro del proyecto", "Campo Vacio");
                }
                else{
                    if($("#telefono").val() === ""){
                        $("#telefono").focus();
                        alerts("El telefono es obligatorio para el registro del proyecto", "Campo Vacio");
                    }
                    else{
                        validarSiNumero($("#telefono").val());
                        if(cent==0){
                            if($("#salario").val() === ""){
                                $("#salario").focus();
                                alerts("El salario es obligatorio para el registro del proyecto", "Campo Vacio");
                            }
                            else{
                                validarSiNumero($("#salario").val());
                                if(cent==0){
                                    if($("#fecha_nac").val() === ""){
                                        $("#fecha_nac").focus();
                                        alerts("La fecha de nacimiento es obligatoria para el registro del proyecto", "Campo Vacio");
                                    }
                                     else{
                                        document.getElementById("registrarTrabajador").submit();
                                            
                                    }
                                    
                                }
                                else{
                                    $("#salario").focus();
                                }
                            }
                        }
                        else{
                            $("#telefono").focus();
                        }
                    }
                }
            
    }
}

function eliminar()
{
	document.getElementById("eliminarTrabajador").submit();
}


function validarSiNumero(numero){
    cent=0;
    if (!/^([0-9])*$/.test(numero)){
        alerts("Se requiere un dato numerico" , "Dato invalido");

        cent=1;
    } 
}