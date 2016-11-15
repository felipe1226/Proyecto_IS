document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")
function validar_actualizacion(){
        if($("#nombre").val() === ""){
            $("#nombre").focus();
            alerts("El nombre es obligatorio para el registro del representante","Campo Vacio");
        }
        else{
            if($("#apellido").val() === ""){
               $("#apellido").focus();
            alerts("El apellido es obligatorio para el registro del representante", "Campo Vacio");
            }
            else{
                if($("#fnato").val() === ""){
                    $("#fnato").focus();
                    a
                    lerts("La fecha de nacimiento es obligatoria para el registro del representante", "Campo Vacio");
                }
                else{
                    if($("#celular").val() === ""){
                        $("#celular").focus();
                        alerts("El celular es obligatorio para el registro del representante", "Campo Vacio");
                    }
                    else{
                        validarSiNumero($("#celular").val());
                        if(cent==0){
                            if($("#direccion").val() === ""){
                                $("#direccion").focus();
                                alerts("La direccion es obligatoria para el registro del representante", "Campo Vacio");
                            }
                            else{
                                 document.getElementById("actualizarRepresentante").submit();  
                            }
                        }
                        else{
                            $("#celular").focus();
                        }
                    }

                    
                }
            }
        } 
    
}

function eliminar()
{
    document.getElementById("eliminarRepresentante").submit();
}

function validarSiNumero(numero){
    cent=0;
    if (!/^([0-9])*$/.test(numero)){
        alerts("Se requiere un dato numerico" , "Dato invalido");

        cent=1;
    } 
}

